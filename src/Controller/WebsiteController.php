<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class WebsiteController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function home(): Response
    {
        return $this->render('home.html.twig', [
            'name' => 'Alex Johnson',
            'testimonials' => $this->getTestimonials(),
            'projects' => $this->getProjects()
        ]);
    }

    #[Route('/services', name: 'services')]
    public function services(): Response
    {
        return $this->render('services.html.twig');
    }

    #[Route('/clients', name: 'clients')]
    public function clients(): Response
    {
        return $this->render('clients.html.twig', [
            'clients' => $this->getClients()
        ]);
    }

    #[Route('/contact', name: 'contact')]
    public function contact(): Response
    {
        return $this->render('contact.html.twig');
    }

    #[Route('/cv', name: 'cv')]
    public function cv(): Response
    {
        return $this->render('cv.html.twig', [
            'name' => 'Alex Johnson'
        ]);
    }

    private function getTestimonials(): array
    {
        return [
            [
                'content' => 'Alex designed an architecture that scaled perfectly with our growing user base. His solutions are both elegant and practical.',
                'name' => 'Sarah Miller',
                'position' => 'CTO',
                'company' => 'TechCorp'
            ],
            [
                'content' => 'The system Alex architected reduced our operational costs by 30% while improving performance. Highly recommended!',
                'name' => 'James Wilson',
                'position' => 'Director of Engineering',
                'company' => 'InnovateSoft'
            ]
        ];
    }

    private function getProjects(): array
    {
        return [
            [
                'title' => 'Enterprise SaaS Platform',
                'description' => 'Microservices-based SaaS solution handling 10M+ monthly transactions with 99.99% uptime.',
                'technologies' => ['Symfony', 'React', 'Kubernetes', 'AWS'],
                'demo_url' => '#',
                'code_url' => '#'
            ],
            [
                'title' => 'E-commerce API Suite',
                'description' => 'High-performance REST API suite for global e-commerce platform processing 5000+ requests/sec.',
                'technologies' => ['PHP', 'API Platform', 'Redis', 'MySQL'],
                'demo_url' => '#',
                'code_url' => '#'
            ]
        ];
    }

    private function getClients(): array
    {
        return [
            [
                'name' => 'TechCorp',
                'industry' => 'Fintech',
                'description' => 'Architected core banking platform handling 5M+ customers'
            ],
            [
                'name' => 'InnovateSoft',
                'industry' => 'Healthcare',
                'description' => 'Designed HIPAA-compliant patient management system'
            ]
        ];
    }
}
