<?php
namespace TigerHeck\MailerLite;

use MailerLite\Common\HttpLayer; 
use Psr\Http\Message\ResponseInterface;
 
class MailerLiteHttpLayer extends HttpLayer {
    /**
     * @return array<string, mixed>
     */
    protected function buildResponse(ResponseInterface $response): array
    {
        $contentTypes = $response->getHeader('Content-Type');
        $contentType = $response->hasHeader('Content-Type') ?
            reset($contentTypes) : null;

        switch ($contentType) {
            case 'application/json':
                $body = json_decode($response->getBody()->getContents(), true, 512, JSON_THROW_ON_ERROR);
                break;
            default:
                $body = $response->getBody()->getContents();
        }

        return (object) [
            'status_code' => $response->getStatusCode(),
            'headers' => $response->getHeaders(),
            'body' => is_array($body) ? collect($body) : $body,
            'response' => $response,
        ];
    }
}