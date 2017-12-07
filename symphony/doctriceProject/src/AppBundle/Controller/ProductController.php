<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\Product;
use AppBundle\Entity\Category;

class ProductController extends Controller
{
    /**
     * @Route("/createProduct")
     * @Method("POST")
     */
    public function createProductAction()
    {
        $em = $this->getDoctrine()->getManager();
        $category = new Category();
        $category->setName('Computer Peripherals');

        $product = new Product();
        $product->setName('Mouse2');
        $product->setPrice(10.99);
        $product->setDescription('Ergonomic and stylish!');
        $product->setImageUrl("image.fr");
        $product->setCategory($category);

        // tells Doctrine you want to (eventually) save the Product (no queries yet)
        $em->persist($category);
        $em->persist($product);


        // actually executes the queries (i.e. the INSERT query)
        $em->flush();

        return $this->redirectToRoute("displayProducts");
    }

    /**
     * @Route("/displayProducts", name="displayProducts")
     */
    public function displayProductsAction()
    {
        $productAll = $this->getDoctrine()
            ->getRepository(Product::class)
            ->findAll();

        return $this->render('/Product/display_products.html.twig',array('productAll' => $productAll));


    }

    /**
     * @Route("/displayDetailProducts/{productId}")
     */
    public function displayDetailProductsAction($productId)
    {
        $product = $this->getDoctrine()
            ->getRepository(Product::class)
            ->find($productId);

        if (!$product) {
            throw $this->createNotFoundException(
                'No product found for id '.$productId
            );
        }

        return $this->render('/Product/display_detail_products.html.twig',['product'=> $product]);

    }

    /**
     * @Route("/updateProduct/{productId}")
     */
    public function updateProductAction($productId)
    {
        $em = $this->getDoctrine()->getManager();
        $product = $em->getRepository(Product::class)->find($productId);

        if (!$product) {
            throw $this->createNotFoundException(
                'No product found for id '.$productId
            );
        }

        $product->setName('New product name!');
        $em->flush();
    }

    /**
     * @Route("/deleteProduct/{productId}")
     */
    public function deleteProductAction($productId)
    {
        $em = $this->getDoctrine()->getManager();
        $product = $em->getRepository(Product::class)->find($productId);

        if (!$product) {
            throw $this->createNotFoundException(
                'No product found for id '.$productId
            );
        }

        $em->remove($product);
        $em->flush();
    }

}
