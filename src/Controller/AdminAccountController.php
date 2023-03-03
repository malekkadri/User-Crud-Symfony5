<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;
use App\Form\UserEditType;

#[IsGranted('ROLE_ADMIN')]
#[Route('/admin/profil')]
class AdminAccountController extends AbstractController
{
   


    
    
    /**
     * Edit user
     *
     * @Route("edition", name="admin_account_edit")
     * 
     * @param Request $request
     * @return Response
     */
    public function edit(Request $request, EntityManagerInterface $entityManager)
    {
        $user = $this->getUser();

        $form = $this->createForm(UserEditType::class, $user);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $entityManager->flush();

            $this->addFlash(
                'success',
                "Votre profil a bien était mis à jour !"
            );

            return $this->redirectToRoute('admin_account_index');
        }

        return $this->render('admin/account/edit.html.twig', [
            'body_class' => "profil-edit content-center",
            'user' => $user,
            'form' => $form->createView()
        ]);
    }

    /**
     * Profil
     *
     * @Route("", name="admin_account_index")
     * 
     * @return Response
     */
    public function index()
    {
        return $this->render('admin/account/index.html.twig', [
            'user' => $this->getUser()
        ]);
    }

}