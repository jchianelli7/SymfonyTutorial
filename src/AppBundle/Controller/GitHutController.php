<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class GitHutController extends Controller
{
    /**
     * @Route("/", name="githut")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('githut/index.html.twig', [
            'avatar_url' => 'https://avatars0.githubusercontent.com/u/7884719?v=4',
            'name' => 'Josh Chianelli',
            'login' => 'jchianelli7',
            'details' => [
                'company' => 'Josh',
                'location' => 'Milwaukee, WI',
                'joined_on' => 'Joined on 13th May 2018',
            ],
            'blog' => 'http://google.com',
            'social_data' => [
                'Public Repos' => 7,
                'Followers' => 1123,
                'Following' => 1132,
            ],
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

//    /**
//     * @Route("/profile",name="profile")
//     */
//    public function profileAction(Request $request)
//    {
//        return $this->render('githut/profile.html.twig',[
//            'avatar_url' => 'https://avatars0.githubusercontent.com/u/7884719?v=4',
//            'name'       => 'Josh Chianelli',
//            'login'      => 'jchianelli7',
//            'details'    => [
//                'company' => 'Josh',
//                'location' => 'Milwaukee, WI',
//                'joined_on' => 'Joined on 13th May 2018',
//            ],
//            'blog' => 'http://google.com',
//            'social_data' => [
//                'Public Repos' => 7,
//                'Followers' => 1123,
//                'Following' => 1132,
//            ],
//         ]);
//
//    }
}
