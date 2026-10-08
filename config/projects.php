<?php

return [
    'bettrack' => [
        'title' => 'BetTrack',
        'subtitle' => 'AI-Powered Betting Risk & ROI Analytics Platform',
        'badge' => 'AI & Analytics',
        'url' => 'https://bettrack-9qje.onrender.com',
        'github' => 'https://github.com/StevieOwen',
        'description' => 'A sports financial tracking application designed to transform unstructured betting slips into structured performance analytics and risk management dashboards.',
        'highlights' => [
            'Automated OCR & Slip Extraction using Gemini AI API.',
            'Custom risk calculations and real-time yield/profit charting.',
            'Secure authentication and email verification via Laravel Fortify.',
            'Relational data modeling with PostgreSQL.'
        ],
        'stack' => ['Laravel', 'PostgreSQL', 'Gemini AI API', 'Laravel Fortify', 'Tailwind CSS']
    ],

    'stayhub' => [
        'title' => 'StayHub',
        'subtitle' => 'Property Rental & Manager Intelligence Portal',
        'badge' => 'SaaS / Real Estate',
        'url' => 'https://gestionappart.onrender.com',
        'github' => 'https://github.com/StevieOwen',
        'description' => 'A multi-tenant apartment management and booking ecosystem providing real-time availability calendars, transactional workflows, and financial intelligence for property owners.',
        'highlights' => [
            'Multi-step booking lifecycle state machine (Pending -> Paid -> Confirmed).',
            'Business intelligence charts detailing occupancy rates and monthly revenue.',
            'Multi-unit relational schema across buildings, apartments, and reservations.',
            'Automated email notifications integrated with Brevo API.'
        ],
        'stack' => ['Laravel', 'PostgreSQL', 'Brevo API', 'Laravel Fortify', 'Tailwind CSS']
    ],

    'moga' => [
        'title' => 'Moga',
        'subtitle' => 'Commercial Training & Course Registration Platform',
        'badge' => 'Client Project',
        'url' => 'https://moga-4qyo.onrender.com',
        'github' => 'https://github.com/StevieOwen',
        'description' => 'A production web app built for a corporate client to streamline student course enrollment, trainer allocation, and training scheduling.',
        'highlights' => [
            'Automated student registration workflows with transactional email alerts.',
            'Admin portal for managing course rosters, trainer seats, and attendance.',
            'Integrated transactional email service using Brevo SMTP/API.',
            'Tailwind UI styled specifically to match client corporate branding.'
        ],
        'stack' => ['Laravel', 'PostgreSQL', 'Brevo Mail', 'Laravel Fortify', 'Tailwind CSS']
    ],
];