<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\Post::factory()->create([
            'title' => 'Laravel',
            'author' => 'Eliu B.',
            'body' => 'Laravel is a web application framework with expressive, elegant syntax. We’ve already laid the foundation — freeing you to create without sweating the small things.',
        ]);

        \App\Models\Post::factory()->create([
            'title' => 'PHP',
            'author' => 'Eliu B.',
            'body' => 'A popular general-purpose scripting language that is especially suited to web development.
            Fast, flexible and pragmatic, PHP powers everything from your blog to the most popular websites in the world.',
        ]);

        \App\Models\Post::factory()->create([
            'title' => 'NodeJs',
            'author' => 'Eliu B.',
            'body' => 'Node.js is a cross-platform, open-source server environment that can run on Windows, Linux, Unix, macOS, and more. Node.js is a back-end JavaScript runtime environment, runs on the V8 JavaScript engine, and executes JavaScript code outside a web browser.',
        ]);

        \App\Models\Post::factory()->create([
            'title' => 'K8s',
            'author' => 'Eliu B.',
            'body' => 'Kubernetes is an open-source container orchestration system for automating software deployment, scaling, and management. Originally designed by Google, the project is now maintained by the Cloud Native Computing Foundation. The name Kubernetes originates from Ancient Greek, meaning \'helmsman\' or \'pilot\'.',
        ]);

        \App\Models\Post::factory()->create([
            'title' => 'Angular',
            'author' => 'Eliu B.',
            'body' => 'Angular is a TypeScript-based, free and open-source single-page web application framework led by the Angular Team at Google and by a community of individuals and corporations. Angular is a complete rewrite from the same team that built AngularJS.',
        ]);

        \App\Models\Post::factory()->create([
            'title' => 'Docker',
            'author' => 'Eliu B.',
            'body' => 'Docker is a set of platform as a service products that use OS-level virtualization to deliver software in packages called containers. The service has both free and premium tiers. The software that hosts the containers is called Docker Engine. It was first released in 2013 and is developed by Docker, Inc.',
        ]);

        \App\Models\Post::factory()->create([
            'title' => 'JavaScript',
            'author' => 'Eliu B.',
            'body' => 'JavaScript, often abbreviated as JS, is a programming language that is one of the core technologies of the World Wide Web, alongside HTML and CSS. As of 2023, 98.7% of websites use JavaScript on the client side for webpage behavior, often incorporating third-party libraries',
        ]);

        \App\Models\Post::factory()->create([
            'title' => 'AWS',
            'author' => 'Eliu B.',
            'body' => 'Amazon Web Services, Inc. is a subsidiary of Amazon that provides on-demand cloud computing platforms and APIs to individuals, companies, and governments, on a metered, pay-as-you-go basis. Clients will often use this in combination with autoscaling.',
        ]);

        \App\Models\Post::factory()->create([
            'title' => 'Azure',
            'author' => 'Eliu B.',
            'body' => 'Microsoft Azure, often referred to as Azure, is a cloud computing platform run by Microsoft. It offers access, management, and the development of applications and services through global data centers.',
        ]);

        \App\Models\Post::factory()->create([
            'title' => 'GCP',
            'author' => 'Eliu B.',
            'body' => 'Google Cloud Platform, offered by Google, is a suite of cloud computing services that provides a series of modular cloud services including computing, data storage, data analytics and machine learning, alongside a set of management tools.',
        ]);

        \App\Models\Post::factory()->create([
            'title' => 'ReactJs',
            'author' => 'Eliu B.',
            'body' => 'React is a free and open-source front-end JavaScript library for building user interfaces based on components. It is maintained by Meta and a community of individual developers and companies. React can be used to develop single-page, mobile, or server-rendered applications with frameworks like Next.js.',
        ]);

        \App\Models\Post::factory()->create([
            'title' => '.NET',
            'author' => 'Eliu B.',
            'body' => 'The .NET platform is a free and open-source, managed computer software framework for Windows, Linux, and macOS operating systems. The project is mainly developed by Microsoft employees by way of the .NET Foundation and is released under an MIT License.',
        ]);

        \App\Models\Post::factory()->create([
            'title' => 'C#',
            'author' => 'Eliu B.',
            'body' => 'C# is a general-purpose high-level programming language supporting multiple paradigms. C# encompasses static typing, strong typing, lexically scoped, imperative, declarative, functional, generic, object-oriented, and component-oriented programming disciplines.',
        ]);

        \App\Models\Post::factory()->create([
            'title' => 'Ionic',
            'author' => 'Eliu B.',
            'body' => 'Ionic is a complete open-source SDK for hybrid mobile app development created by Max Lynch, Ben Sperry, and Adam Bradley of Drifty Co. in 2013. The original version was released in 2013 and built on top of AngularJS and Apache Cordova.',
        ]);

        \App\Models\Post::factory()->create([
            'title' => 'Kotlin',
            'author' => 'Eliu B.',
            'body' => 'Kotlin is a cross-platform, statically typed, general-purpose high-level programming language with type inference. Kotlin is designed to interoperate fully with Java, and the JVM version of Kotlin\'s standard library depends on the Java Class Library, but type inference allows its syntax to be more concise.',
        ]);

        \App\Models\Post::factory()->create([
            'title' => 'Swift',
            'author' => 'Eliu B.',
            'body' => 'Swift is a high-level general-purpose, multi-paradigm, compiled programming language developed by Apple Inc. and the open-source community. Swift compiles to machine code, as it is an LLVM-based compiler.',
        ]);
    }
}
