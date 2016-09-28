<?php
/****************** DATA USER PROFILE ******************/
$data['user'] = array(
  'first_name' => 'Andres',
  'full_name' => 'Andres Garc&iacute;a',
  'image' => '../../images/andres.jpg',
  'title_professional' => 'Full Stack Developer',
  'member_since' => 2013,
  'abstract' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, asperiores quod est tenetur in. Eligendi, deserunt, blanditiis est quisquam doloribus voluptate id aperiam ea ipsum magni aut perspiciatis rem voluptatibus officia eos rerum deleniti quae nihil facilis repellat atque vitae voluptatem libero at eveniet veritatis ab facere.',
  'top_skills' => [
    array(
      'skill' => 'JavaScript',
      'experience' => 4
    ),
    array(
      'skill' => 'PHP',
      'experience' => 4
    ),
    array(
      'skill' => 'SQL',
      'experience' => 3
    ),
    array(
      'skill' => 'MongoDB',
      'experience' => 1
    ),
    array(
      'skill' => 'Linux',
      'experience' => 2
    ),
    array(
      'skill' => 'GIT',
      'experience' => 4
    )
  ],
  'skills' => [
    array(
      'title' => 'Languages',
      'data' =>   [
        array(
          'skill' => 'JavaScript',
          'experience' => 4
        ),
        array(
          'skill' => 'PHP',
          'experience' => 4
        ),
        array(
          'skill' => 'C#',
          'experience' => 1
        ),
        array(
          'skill' => 'Java',
          'experience' => 1
        ),
        array(
          'skill' => 'Python',
          'experience' => 2
        )
        ]
      ),
      array(
      'title' => 'Databases',
      'data' =>   [
          array(
          'skill' => 'Oracle',
          'experience' => 1
        ),
        array(
          'skill' => 'SQL',
          'experience' => 3
        ),
        array(
          'skill' => 'MySQL',
          'experience' => 4
        ),
        array(
          'skill' => 'SQLite',
          'experience' => 1
        ),
        array(
          'skill' => 'MS Access',
          'experience' => 1
        ),
        array(
          'skill' => 'MongoDB',
          'experience' => 1
        )
        ]
      ),
      array(
      'title' => 'Frameworks',
      'data' =>   [
          array(
            'skill' => 'Symfony | Laravel | CodeIgniter', 
            'experience' => 3
          ),
          array(
            'skill' => 'Django', 
            'experience' => 1
          ),
          array(
            'skill' => 'Zend', 
            'experience' => 1
          )
        ]
      ),
      array(
      'title' => 'Libraries',
      'data' =>   [
        array(
          'skill' => 'jQuery | UI & Mobile',
          'experience' => 3
        ),
        array(
          'skill' => 'Stylus | Sass | Less',
          'experience' => 2
        ),
        array(
          'skill' => 'Bootstrap | Foundation | Materialize',
          'experience' => 2
        )
        ]
      ),
      array(
      'title' => 'API&apos;s',
      'data' =>   [
          array(
            'skill' => 'Google Map', 
            'experience' => 1
          ),
          array(
            'skill' => 'Google Calendar', 
            'experience' => 2
          ),
          array(
            'skill' => 'Facebook', 
            'experience' => 1
          ),
          array(
            'skill' => 'Linkedin', 
            'experience' => 1
          ),
          array(
            'skill' => 'Twilio', 
            'experience' => 1
          ),
          array(
            'skill' => 'Stripe', 
            'experience' => 2
          ),
          array(
            'skill' => 'SendGrid | Mailchimp', 
            'experience' => 1
          ),
          array(
            'skill' => 'AWS S3', 
            'experience' => 1
          )
        ]
      ),
      array(
      'title' => 'Tools',
      'data' =>   [
          array(
            'skill' => 'GIT | SVN | Mercurial', 
            'experience' => 2
          ),
          array(
            'skill' => 'GitHub | Bitbucket', 
            'experience' => 2
          ),
          array(
            'skill' => 'JIRA | Pivotal Tracker', 
            'experience' => 2
          ),
          array(
            'skill' => 'NetBeans | Sublime Text', 
            'experience' => 3
          )
        ]
      ),
      array(
      'title' => 'Others',
      'data' =>   [
          array(
            'skill' => 'HTML | CSS', 
            'experience' => 4
          ),
          array(
            'skill' => 'Linux | DevOps', 
            'experience' => 2
          ),
          array(
            'skill' => 'Wordpress', 
            'experience' => 1
          ),
          array(
            'skill' => 'Dokeos | Moodle', 
            'experience' => 1
          )
        ]
      )
  ],
  'projects' => [
    array(
      'title' => 'Swaggle',
      'position' => 'Full Stack Developer',
      'description' => 'Page for manage golf lessons and groups with python, django and mysql.'
    ),
    array(
      'title' => 'Faveo',
      'position' => 'Backend Developer',
      'description' => 'Website & iOS app for requesting assistance in moving/cleaning services. Was built using Python, MySQL and Swift.'
    ),
    array(
      'title' => 'SMI',
      'position' => 'Full Stack Developer',
      'description' => 'Website for commercial producer of PET products. Was built using Python and MySQL.'
    )
  ],
  'experience' => [
    array(
      'experience' => 'Full-Stack Web Developer',
      'location' => 'Tecla Labs',
      'description' => ''
    ),
    array(
      'experience' => 'Dokeos',
      'location' => 'Development backend on manage and create new tools.',
      'description' => ''
    )
  ],
  'education' => [
    array(
      'education' => 'Student in computing',
      'location' => 'IDAT Higher Technological Institute'
    )
  ],
  'languages' => [
    array(
      'language' => 'English',
      'description' => 'Read/Write'
    ),
    array(
      'language' => 'Spanish',
      'description' => 'Fluent'
    )
  ]
);
/****************** DATA USER PROFILE ******************/

$title = 'Profile Developers | Tecla.io';
include '../head.php';
include '../base.php';
?>