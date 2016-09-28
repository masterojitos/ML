<?php
/****************** DATA USER PROFILE ******************/
$data['user'] = array(
	'first_name' => 'Paul',	
	'full_name' => 'Paul Aguilar',
	'image' => '../../images/paul.png',
	'title_professional' => 'Software Developer',
	'member_since' => 2014,
	'abstract' => 'Paul has been working at Tecla.io since 2014 and has had the opportunity to collaborate with some really great startups and engineering teams based in Silicon Valley and San Francisco. He has deep understanding of iOS development, including Xcode, Swift, and Objective-C . Paul is very passionate about competitive programming, algorithms, programming languages and software development.',
	'top_skills' => [
		array(
			'skill' => 'iOS Development',
			'experience' => 3
		),
		array(
			'skill' => 'Swift',
			'experience' => 2
		),
		array(
			'skill' => 'Objective-C',
			'experience' => 3
		),
		array(
			'skill' => 'Ruby',
			'experience' => 2
		),
		array(
			'skill' => 'Python',
			'experience' => 2
		),
		array(
			'skill' => 'GIT',
			'experience' => 2
		)
	],
	'skills' => [
		array(
			'title' => 'Languages',
			'data' => 	[
	    		array(
					'skill' => 'Swift',
					'experience' => 2
				),
				array(
					'skill' => 'Objective-C',
					'experience' => 3
				),
				array(
					'skill' => 'Ruby',
					'experience' => 2
				),
				array(
					'skill' => 'Python',
					'experience' => 2
				),
				array(
					'skill' => 'C++',
					'experience' => 1
				)
	    	]
	    ),
	    array(
			'title' => 'Frameworks',
			'data' => 	[
	    		array(
	    			'skill' => 'Rails', 
	    			'experience' => '2'
	    		),
	    		array(
	    			'skill' => 'Django', 
	    			'experience' => '2'
	    		)
	    	]
	    ),
	    array(
			'title' => 'Tools',
			'data' => 	[
	    		array(
	    			'skill' => 'Docker'
	    		),
	    		array(
	    			'skill' => 'Xcode'
	    		),
	    		array(
	    			'skill' => 'GIT'
	    		),
	    		array(
	    			'skill' => 'Sublime Text'
	    		),
	    		array(
	    			'skill' => 'Slack'
	    		),
	    		array(
	    			'skill' => 'Pivotal Traker'
	    		),
	    		array(
	    			'skill' => 'Trello'
	    		)
	    	]
	    )
	],
	'projects' => [
		array(
			'title' => 'RunEffective',
      'position' => 'iOS Development',
			'description' => 'Effective makes running a dynamic, happy workplace a breeze. Was built using Swift'
		),
		array(
			'title' => 'Alumnify',
      'position' => 'iOS Development',
			'description' => 'Alumnify provides all features to track, analyze, and improve alumni engagement on campus and across the country. Was built using Swift'
		),
		array(
			'title' => 'OnMyBlock',
      'position' => 'iOS Development',
			'description' => 'Find, rent, and list the best-off campus housing through our online student marketplace. Was built using Objective-C.'
		),
		array(
			'title' => 'Vetted',
      'position' => 'Backend Development',
			'description' => 'App for recommending people within social network. Was built using Django and MySQL.'
		)
	],
	'experience' => [
		array(
			'experience' => 'Software Engineer',
			'location' => 'Tecla Labs',
			'description' => ''
		)
	],
	'education' => [
		array(
			'education' => 'Bachelor of Systems Engineering',
			'location' => 'UNMSM, Lima, Peru'
		)
	],
	'languages' => [
		array(
			'language' => 'Spanish',
			'description' => 'Fluent'
		),
		array(
			'language' => 'English',
			'description' => 'Read/Write'
		),
		array(
			'language' => 'Portuguese',
			'description' => 'Read/Write'
		)
	]
);
/****************** DATA USER PROFILE ******************/

$title = 'Profile Developers | Tecla.io';
include '../head.php';
include '../base.php';
?>