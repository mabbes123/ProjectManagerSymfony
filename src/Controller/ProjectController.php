<?php

namespace App\Controller;

use App\Entity\Project;
use App\Entity\Task;
use App\Form\ProjectType;
use App\Repository\TaskRepository;
use App\Repository\ProjectRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;

/**
 * @IsGranted("IS_AUTHENTICATED_FULLY")
 * @Route("/project")
 */
class ProjectController extends AbstractController
{
    /**
     * @Route("/", name="project_index", methods={"GET"})
     */
    public function index(ProjectRepository $projectRepository): Response
    {
        $date = date("d-m-Y");
        return $this->render('project/index.html.twig', [
            'projects' => $projectRepository->findBy(
                array('user_id' => $this->getUser()->getId()),
                array('deadline' => 'ASC'),
            ),
            'date' => $date,
        ]);
    }

    /**
     * @Route("/archive", name="project_archived", methods={"GET"})
     */
    public function archive(ProjectRepository $projectRepository): Response
    {
        
        return $this->render('project/archive.html.twig', [
            'projects' => $projectRepository->findBy(
                array('user_id' => $this->getUser()->getId()),
                array('deadline' => 'ASC'),
            ),
        ]);
    }

    /**
     * @Route("/new", name="project_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $user = $this->getUser();

        $project = new Project();
        $form = $this->createForm(ProjectType::class, $project);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $project->setUserId($user);
            $project->setRegistered(new \DateTime());
            $project->setStatus("in progress");
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($project);
            $entityManager->flush();

            return $this->redirectToRoute('project_index');
        }

        return $this->render('project/new.html.twig', [
            'project' => $project,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="project_show", methods={"GET"})
     */
    public function show(Project $project, TaskRepository $taskRepository): Response
    {   
        $date = date("d-m-Y");
        return $this->render('project/show.html.twig', [
            'date' => $date,
            'project' => $project,
            'tasks' => $taskRepository->findBy(
                array('project_id' => $project),
                array('deadline' => 'ASC')),
        ]);
    }

    /**
     * @Route("/{id}/edit", name="project_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Project $project): Response
    {
        $form = $this->createForm(ProjectType::class, $project);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('project_index');
        }

        return $this->render('project/edit.html.twig', [
            'project' => $project,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="project_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Project $project): Response
    {
        if ($this->isCsrfTokenValid('delete'.$project->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($project);
            $entityManager->flush();
        }

        return $this->redirectToRoute('project_index');
    }
}
