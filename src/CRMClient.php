<?php

namespace UtelecomIM\CRMClient;

use GuzzleHttp\Client;
use GuzzleHttp\RequestOptions;
use InvalidArgumentException;

class CRMClient
{
    /**
     * @var Client
     */
    private $client;

    /**
     * @var string
     */
    private $password;

    /**
     * @var string
     */
    private $login;

    /**
     * @var string
     */
    private $operatorToken;

    /**
     * @var string
     */
    private $bearerToken;

    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    /**
     * @param string $login
     * @param string $password
     * @return $this
     */
    public function setCredentials(string $login, string $password)
    {
        $this->login = $login;
        $this->password = $password;
        return $this;
    }

    /**
     * @param string $operatorToken
     * @return $this
     */
    public function setOperatorToken(string $operatorToken)
    {
        $this->operatorToken = $operatorToken;
        return $this;
    }

    /**
     * @return void
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    protected function auth()
    {
        $response = $this->client->post("auth", [
            RequestOptions::JSON => [
                'login'    => $this->login,
                'password' => $this->password,
            ],
        ]);

        if ($response->getStatusCode() == 200) {
            $response = json_decode($response->getBody(), false);
            $this->bearerToken = $response->token;
        } else {
            throw new InvalidArgumentException("Invalid credentials");
        }
    }

    /**
     * @param LeadDTO $leadDTO
     * @return array
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function createLead(LeadDTO $leadDTO)
    {
        $headers = [
            "Accept"           => "application/json",
            "X-Operator-Token" => $this->operatorToken,
        ];

        if ($this->login && $this->password) {
            $this->auth();
            $headers["Authorization"] = "Bearer " . $this->bearerToken;
        }

        $response = $this->client->post("crm/lead", [
            RequestOptions::JSON    => $leadDTO,
            RequestOptions::HEADERS => $headers
        ]);

        return [
            "code"     => $response->getStatusCode(),
            "response" => json_decode($response->getBody()->getContents(), true)
        ];
    }
}
