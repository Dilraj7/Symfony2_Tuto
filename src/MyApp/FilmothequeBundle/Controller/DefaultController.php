<?php

namespace MyApp\FilmothequeBundle\Controller;

use Symfony\Component\DependencyInjection\ContainerAware,
    Symfony\Component\HttpFoundation\RedirectResponse;
use MyApp\FilmothequeBundle\Entity\Categorie;

class DefaultController extends ContainerAware {

    public function enregistrerCategorie() {
        $em = $this->container->get('doctrine')->getEntityManager();
        $categorie1 = new Categorie();
        $categorie1->setNom('Comédie');
        $em->persist($categorie1);
        $categorie2 = new Categorie();
        $categorie2->setNom('Science-fiction');
        $em->persist($categorie2);
        $em->flush();

        $message = 'Catégories créées avec succès';
        return $this->container->get('templating')->renderResponse('MyAppFilmothequeBundle:Default:index.html.twig', array('message' => $message)
        );
    }

    public function indexAction() {
        $em = $this->container->get('doctrine')->getEntityManager();
        $categories = $em->getRepository('MyAppFilmothequeBundle:Categorie')->findAll();
        return $this->container->get('templating')->renderResponse('MyAppFilmothequeBundle:Default:index.html.twig', array(
                    'categories' => $categories)
        );
    }

}
