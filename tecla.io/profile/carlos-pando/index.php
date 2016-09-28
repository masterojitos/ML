<?php
/****************** DATA USER PROFILE ******************/
$data['user'] = array(
  'first_name' => 'Carlos',
  'full_name' => 'Carlos Pando',
  'image' => '../../images/carlos.jpg',
  'title_professional' => 'Full Stack Developer',
  'member_since' => 2016,
  'abstract' => 'Carlos has a mix of problem solving, creative, and technical skills that allow him to excel in the ever-changing field of software development. He enjoys working with new technologies, languages, and frameworks, and finding optimal solutions to tough problems.',
  'top_skills' => [
	array(
		'skill' => 'JavaScript',
		'experience' => 3
	),
	array(
		'skill' => 'AngularJS',
		'experience' => 2
		),
		array(
			'skill' => 'Ruby',
			'experience' => 2
		),
		array(
			'skill' => 'Python',
			'experience' => 1
		),
		array(
			'skill' => 'C#',
			'experience' => 1
		),
		array(
			'skill' => 'Scrum',
			'experience' => 2
		)
	],
  'skills' => [
      array(
      'title' => 'Languages',
      'data' =>   [
          array(
            'skill' => 'JavaScript', 
            'experience' => 3
          ),
          array(
            'skill' => 'Ruby', 
            'experience' => 2
          ),
          array(
            'skill' => 'Python', 
            'experience' => 1
          ),
          array(
            'skill' => 'C#', 
            'experience' => 1
          )
        ]
      ),
      array(
      'title' => 'Databases',
      'data' =>   [
        array(
          'skill' => 'MySQL',
          'experience' => 1
        ),
        array(
          'skill' => 'PostgreSQL',
          'experience' => 2
        ),
        array(
          'skill' => 'SQLite',
          'experience' => 2
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
            'skill' => 'Ruby on Rails', 
            'experience' => 2
          ),
          array(
            'skill' => '.NET', 
            'experience' => 1
          ),
          array(
            'skill' => 'Sinatra', 
            'experience' => 1
          ),
          array(
            'skill' => 'Tornado', 
            'experience' => 1
          ),
          array(
            'skill' => 'AngularJS', 
            'experience' => 1
          ),
          array(
            'skill' => 'BackboneJS', 
            'experience' => 1
          )
        ]
      ),
      array(
      'title' => 'Libraries',
      'data' => [
          array(
            'skill' => 'OmniAuth',
            'experience' => 1
          ),
          array(
            'skill' => 'Mechanize',
            'experience' => 1
          ),
          array(
            'skill' => 'Underscore',
            'experience' => 1
          ),
          array(
            'skill' => 'SignalR', 
            'experience' => 1
          ),
          array(
            'skill' => 'scikit-learn | scikit-image',
            'experience' => 1
          )
        ]
      ),
      array(
      'title' => 'API&apos;s',
      'data' =>   [
          array(
            'skill' => 'Google Map', 
            'experience' => 2
          ),
          array(
            'skill' => 'Google+', 
            'experience' => 1
          ),
          array(
            'skill' => 'Facebook', 
            'experience' => 2
          ),
          array(
            'skill' => 'Twitter', 
            'experience' => 2
          )
        ]
      ),
      array(
      'title' => 'Tools',
      'data' =>   [
          array(
            'skill' => 'GIT', 
            'experience' => 3
          ),
          array(
            'skill' => 'GitHub', 
            'experience' => 3
          ),
          array(
            'skill' => 'Scrum | Kanban', 
            'experience' => 2
          ),
          array(
            'skill' => 'Target Process | Pivotal Tracker', 
            'experience' => 2
          ),
          array(
            'skill' => 'Sublime Text', 
            'experience' => 3
          )
        ]
      ),
      array(
      'title' => 'Others',
      'data' =>   [
          array(
            'skill' => 'HTML | CSS', 
            'experience' => 3
          ),
          array(
            'skill' => 'XML | YAML | JSON', 
            'experience' => 3
          ),
          array(
            'skill' => 'Linux | DevOps', 
            'experience' => 1
          )
        ]
      )
  ],
  'projects' => [
    array(
      'title' => 'Waggl.it',
      'description' => 'Waggl is a simple way to listen to employees, distill insights and improve the culture of an organization. The Waggl platform is built using Ruby on Rails and Backbone.js.',
            'position' => 'Web Developer'
    ),
    array(
      'title' => 'Veriato',
      'description' => 'Veriato provides employee monitoring and behavior analytics software for various businesses.',
      'position' => 'UI Engineer'
    ),
    array(
      'title' => 'Sisac',
      'description' => 'Sisac is a customer portfolio management application.',
      'position' => 'Audit intern'
    ),
    array(
      'title' => 'Edificia.pe',
      'description' => 'Edificia is a cloud application that allows people to find the right residential or commercial real estate in Lima, Peru.',
      'position' => 'Web Developer'
    ),
    array(
      'title' => 'ERP Generator',
      'description' => 'ERP Generator is a cloud-based application used to generate customizable ERP systems.',
      'position' => 'Web Developer'
    )
  ],
  'experience' => [
    array(
      'experience' => 'Web Developer',
      'location' => 'Tecla Labs',
      'description' => 'Web development using technologies such as Ruby on Rails, AngularJS, and Backbone.js.'
    ),
    array(
      'experience' => 'UI Engineer',
      'location' => 'BelatrixSF',
      'description' => 'Worked on a real time dashboard developed using AngularJS and SignalR.'
    ),
    array(
      'experience' => 'Audit intern',
      'location' => 'BCP, Peru',
      'description' => '.NET development'
    ),
    array(
      'experience' => 'Web Developer',
      'location' => 'Assetec',
      'description' => 'Worked on the development of Edificia.pe using Ruby on Rails.'
    ),
    array(
      'experience' => 'Web Developer',
      'location' => 'BitZeppelin',
      'description' => 'Worked in the ERP Generator project using Tornado.'
    )
  ],
  'education' => [
    array(
      'education' => 'Undergraduate Student',
      'location' => 'National University of Engineering, Peru'
    )
  ],
  'languages' => [
    array(
      'language' => 'English',
      'description' => 'Fluent'
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