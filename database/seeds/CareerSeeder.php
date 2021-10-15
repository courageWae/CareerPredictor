<?php

use Illuminate\Database\Seeder;

class CareerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('careers')->insert([
            'title' => "System Engineer",
            'definition' => "Systems engineering is an interdisciplinary field of engineering and engineering management that focuses on how to design, integrate, and manage complex systems over their life cycles. At its core, systems engineering utilizes systems thinking principles to organize this body of knowledge. The individual outcome of such efforts, an engineered system, can be defined as a combination of components that work in synergy to collectively perform a useful function." ,
            'salary' => '70,500 cedis per year',
            'requirement' => "A Bachelor's Degree in Computer Science or a related field is often required. Coursework in business administration, management and finance may help these professionals better apply their IT knowledge to improving business practices"
        ]) ;

        DB::table('careers')->insert([
            'title' => "Support Specialist",
            'salary' => "35,500 cedis per year",
            'requirement' => "Support specialists typically obtain a Bachelor's Degree in Computer Science or Information Technology. Having a certificate or an associate degree paired with relevant professional experience may also be acceptable.",
            'definition' => "Support specialists are responsible for reviewing and solving computer network and hardware problems for a business. They can work in a variety of industries to provide general support to a company's employees, or they can work at a technology or software as a service (SaaS) company and provide technical support on user experience issues that require technical assistance." ,
        ]) ;

        DB::table('careers')->insert([
            'title' => "Computer Programmer",
            'definition' => "computer programmer is someone who writes new computer software using coding languages like HTML, JavaScript and CSS. Video game software can be updated to improve online gameplay, which is an opportunity for programmers to troubleshoot problems experienced by gamers after the game is released to the general public." ,
            'salary' => "80,000 cedis per year",
            'requirement' => " A programmer typically completes a Bachelor's Degree in Computer Science and an internship to build their skills. Certifications are also strongly encouraged, and there are many coding academies to choose from."
        ]);

        DB::table('careers')->insert([
            'title' => "Quality Assurance Tester",
            'definition' => " Quality assurance testers are technicians or engineers who check software products to see if they're up to industry standards and free of any issues. This role is common for gaming systems, mobile applications and other technology that needs further testing and maintenance when recommended." ,
            'salary' => "70,000 cedis per year",
            'requirement' => "Many quality assurance testers have a Bachelor's Degree in Software Design, Engineering or Computer Science. Testers can work on different software for IT companies, which may influence what degree or specialization they pursue. These professionals should also have excellent time management and communication skills to help document test cases."
        ]);

        DB::table('careers')->insert([
            'title' => "IT Technician",
            'definition' => "An IT technician collaborates with support specialists to analyze and diagnose computer issues. They also monitor processing functions, install relevant software and perform tests on computer equipment and applications when necessary. They may also train a company's employees, clients and other users on a new program or function as well.",
            'salary' => "64,000 cedis per year",
            'requirement' => "IT technicians must earn an Associate Degree in Information Technology or a Bachelor's Degree in Computer Science or Networking. Technicians render services for IT companies depending on the industry they choose to work in and may need to learn more about database programming to give themselves an advantage in an entry-level role."
        ]);

        DB::table('careers')->insert([
            'title' => "Network Engineer",
            'definition' => "Network engineers work on the day-to-day maintenance and development of a company's computer network, utilizing their skills to make the network available and efficient for all employees within an organization.",
            'salary' => "85,000 cedis per year",
            'requirement' => "These professionals typically need a Bachelor's Degree in Computer Science and Information Systems to understand the functions of a network and become familiar with potential solutions needed to maintain one. Some employers may also require a Master of Business Administration (MBA) for those who work with other internal stakeholders of the organization to determine the best technology practices."
        ]);

        DB::table('careers')->insert([
            'title' => "Database Administrator",
            'definition' => "Database administrators employ specialized software to organize and keep track of data. The software can be associated with software configuration, security and performance when applicable. These professionals frequently diagnose and solve complex IT issues related to the data infrastructure to ensure an organization's data is safe, accessible and easy to navigate.",
            'salary' => "90,000 cedis per year",
            'requirement' => " Database administrators typically need to earn a Bachelor's Degree in Computer Science or Management Information Systems. They often start as a database analyst or a developer before moving into this role so they can get the experience in data collection and working within a network's databases."
        ]);

        DB::table('careers')->insert([
            'title' => "Software Engineer",
            'definition' => "Software engineers apply their knowledge of mathematics and computer science to create and improve new software. They may work on enterprise applications, operating systems and network control systems, which are all examples of software that can be used to help businesses scale their IT infrastructure.",
            'salary' => "100,100 cedis per year",
            'requirement' => "Most computer scientists need both a bachelor's and a master's degree to become experts in software development and maintenance. They learn and practice skills in technical problem-solving, diagnosis, troubleshooting and programming languages."
        ]);

        DB::table('careers')->insert([
            'title' => "System Analyst",
            'definition' => "A systems analyst reviews design components and uses their knowledge of information technology to solve business problems. They identify ways that infrastructure needs to change to streamline business and IT operations. They can also assist technicians in training staff to implement the changes they propose.",
            'salary' => "64,600 cedis per year",
            'requirement' => "A Bachelor's Degree in Computer Science or a related field is often required. Coursework in business administration, management and finance may help these professionals better apply their IT knowledge to improving business practices."
         ]);

        DB::table('careers')->insert([
            'title' => "IT Director",
            'definition' => "An IT director oversees the strategy and execution of IT operations for an organization. They ensure that department tasks align with the company's goals and development. These professionals may also collaborate with other internal IT professionals as well as executive management to generate contingency plans, budgets and development goals.",
            'salary' => "120,000 cedis per year",
            'requirement' => "This position may require a graduate degree and relevant industry certifications, such as in certain programs or applicable management courses. Entry and mid-level roles in IT support and database architecture can provide these professionals with well-rounded experience to help them advance to this management position."
        ]);

        DB::table('careers')->insert([
            'title' => "Data Scientist",
            'definition' => "A data scientist analyzes and organizes data to determine trends that can influence business decisions. Their methods and IT tools use statistics and machine learning to help collect and process a company's data such as financial records, sales, prospects and lead generation. Some duties vary for specific industries. For example, data scientists in the healthcare industry keep electronic health records (EHRs) intact for hospitals to have access to confidential medical information. They may also use data to help healthcare organizations make sound business decisions.",
            'salary' => "121,500 cedis per year",
            'requirement' => "Many of these professionals choose to pursue both a Bachelor's and a Master's Degree in IT or other business fields. Some pursue additional degrees, coursework and certifications that relate to their specific industry, such as healthcare."
        ]);

        DB::table('careers')->insert([
            'title' => "User Experience Designer",
            'definition' => "",
            'salary' => "89,000 cedis per year",
            'requirement' => "UX designers may pursue an associate or bachelor's degree program in an IT field and pursue additional coursework or training in design, business, web development and programming. Others may be self-taught in programming, design and development. Many employers do seek previous experience, so an internship or portfolio may help these professionals secure employment."
        ]) ;
    }
}
