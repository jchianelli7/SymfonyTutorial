<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class GitHutController extends Controller
{
    /**
     * @Route("/{username}", name="githut", defaults={ "username" : "jchianelli7" })
     */
    public function indexAction(Request $request, $username)
    {
        return $this->render('githut/index.html.twig', [
            'username' => $username,
            'repo_count' => 100,
            'most_stars' => 99,
            'repos' => [
                [
                    'name' => 'example 1',
                    'url' => 'https://github.com/jchianelli7',
                    'stargazers_count' => 46,
                    'description' => 'desc. 1',
                ],
                [
                    'name' => 'example 2',
                    'url' => 'https://github.com/jchianelli7',
                    'stargazers_count' => 46,
                    'description' => 'desc. 2',
                ],
                [
                    'name' => 'example 3',
                    'url' => 'https://github.com/jchianelli7',
                    'stargazers_count' => 46,
                    'description' => 'desc. 3',
                ],
            ],
        ]);
    }


    /**
     * @Route("/profile/{username}",name="profile")
     */
    public function profileAction(Request $request, $username)
    {
        $profileData = $this->get('github_api')->getProfile($username);

        return $this->render('githut/profile.html.twig', $profileData);

    }
}
