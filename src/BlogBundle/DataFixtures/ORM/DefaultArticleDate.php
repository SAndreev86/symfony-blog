<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 21.03.2017
 * Time: 19:34
 */

namespace BlogBundle\DateFixtures\ORM;

use BlogBundle\Entity\Blog;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class DefaultArticleDate implements FixtureInterface
{

    /**
     * Load data fixtures with the passed EntityManager
     *
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
        $blog = new Blog();
        $blog->setSummary("gfhgfhfhfghgfhfhfghfghfghfhgf");
        $blog->setBody("dfgggggggggggdfgdfgdfgdfgdfgdfgdfgdfg");
        $blog->setTitle("ddfdfdsfdsfsdf");
        $manager->persist($blog);
        $manager->flush();
    }
}