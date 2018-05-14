<?php namespace AppBundle\Service;
class GitHubApi
{
    public function getProfile($username)
    {
        $client = new \GuzzleHttp\Client();
        $response = $client->request('GET', 'https://api.github.com/users/' . $username);

        $data = json_decode($response->getBody()->getContents(), true);

        return [
            'avatar_url' => $data['avatar_url'],
            'name' => $data['name'],
            'login' => $data['login'],
            'details' => ['company' => $data['company'],
                'location' => $data['location'],
                'joined_on' => 'Joined on ' . (new \DateTime($data['created_at']))->format('d m Y'),],
            'blog' => $data['blog'],
            'social_data' => ['Public Repos' => $data['public_repos'],
                'Followers' => $data['followers'],
                'Following' => $data['following'],
            ],
        ];
    }
}