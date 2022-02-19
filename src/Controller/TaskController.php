<?php

namespace App\Controller;

use App\Entity\Project;
use App\Entity\Task;
use App\Form\TaskType;
use App\Repository\TaskRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/task")
 */
class TaskController extends AbstractController
{
    /**
     * @Route("/", name="task_index", methods={"GET"})
     */
    public function index(TaskRepository $taskRepository): Response
    {
        return $this->render('task/index.html.twig', [
            'tasks' => $taskRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new/{id}", name="task_new", requirements={"id"="\d+"}, methods={"GET","POST"})
     */
    public function new(int $id, Request $request): Response
    {
        $projectRepository = $this->getDoctrine()->getRepository(Project::class);
        $project = $projectRepository->find(['id' => $id]);

        $task = new Task();
        $form = $this->createForm(TaskType::class, $task);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $task->setProjectId($project);
            $task->setRegistered(new \DateTime());
            $task->setStatus("in progress");
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($task);
            $entityManager->flush();
            
            return $this->redirectToRoute('project_show', ["id" => $task->getProjectId()->getId()]);
        }
        

        return $this->render('task/new.html.twig', [
            'task' => $task,
            'form' => $form->createView(),
            'project' => $project,
        ]);
    }

    // /**
    //  * @Route("/../project/{id}", name="task_show", methods={"GET"})
    //  */
    // public function show(int $id, Task $task): Response
    // {
    //     $projectRepository = $this->getDoctrine()->getRepository(Project::class);
    //     $project = $projectRepository->find(['id' => $id]);

    //     return $this->redirectToRoute('project_show', ["id" => $task->getProjectId()->getId()]);
    //     // return $this->render('project/show.html.twig', [
    //     //     'project' => $project,
    //     // ]);
    // }

    /**
     * @Route("/{id}/edit", name="task_edit", methods={"GET","POST"})
     */
    public function edit(int $id, Request $request, Task $task): Response
    {
        $projectRepository = $this->getDoctrine()->getRepository(Project::class);
        $project = $projectRepository->find(['id' => $task->getProjectId()]);

        dump($task);
        $form = $this->createForm(TaskType::class, $task);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('project_show', ["id" => $task->getProjectId()->getId()]);
        }

        return $this->render('task/edit.html.twig', [
            'task' => $task,
            'form' => $form->createView(),
            'project' => $project,
        ]);
    }

    /**
     * @Route("/{id}", name="task_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Task $task): Response
    {
        if ($this->isCsrfTokenValid('delete'.$task->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($task);
            $entityManager->flush();
        }

        return $this->redirectToRoute('project_show', ["id" => $task->getProjectId()->getId()]);
    }
}
