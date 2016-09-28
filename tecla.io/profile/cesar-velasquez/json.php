<?php
/****************** DATA USER PROFILE ******************/
$data['user'] = array(
	'first_name' => 'Cesar',
	'full_name' => 'Cesar Velasquez Huaman',
	'image' => '../../images/cesar_tecla.jpg',
	'title_professional' => 'Mobile Developer',
	'member_since' => 2014,
	'abstract' => 'Salvador is a versatile full-stack web developer with over 5 years of professional experience in the field. He started his career working with PHP on the backend and HTML, CSS, and jQuery on the frontend. Five years later, he is a seasoned developer having built web projects with AngularJS, Node.js and MEAN Stack. Salvador handles everything from design to backend.',
	'top_skills' => [
		array(
			'skill' => 'Java',
			'experience' => 4
		),
		array(
			'skill' => 'Objective-C',
			'experience' => 3
		),
		array(
			'skill' => 'Swift',
			'experience' => 2
		),
		array(
			'skill' => 'C++',
			'experience' => 2
		),
		array(
			'skill' => 'Python',
			'experience' => 5
		)
	],
	'skills' => [
		array(
			'title' => 'Languages',
			'data' => 	[
	    		array(
					'skill' => 'Java',
					'experience' => 4
				),
				array(
					'skill' => 'Objective-C',
					'experience' => 3
				),
				array(
					'skill' => 'Swift',
					'experience' => 2
				),
				array(
					'skill' => 'C++',
					'experience' => 2
				),
				array(
					'skill' => 'Python',
					'experience' => 5
				)
	    	]
	    ),
	    array(
			'title' => 'Databases',
			'data' => 	[
				array(
					'skill' => 'Sqlite',
					'experience' => 1
				)
			]
	    ),
	    array(
			'title' => 'Frameworks',
			'data' => 	[	    		
	    		array(
	    			'skill' => 'VolleyFramework', 
	    			'experience' => '3'
	    		)
	    	]
	    ),
	    array(
			'title' => 'Libraries',
			'data' => 	[
	    		array(
	    			'skill' => 'AlamoFire', 
	    			'experience' => '3'
	    		),
	    		array(
	    			'skill' => 'SwiftyJSON', 
	    			'experience' => '1'
	    		),
	    		array(
	    			'skill' => 'Haneke', 
	    			'experience' => '1'
	    		),
	    		array(
	    			'skill' => 'Cocoa Touch', 
	    			'experience' => '2'
	    		),
	    		array(
	    			'skill' => 'Core Data', 
	    			'experience' => '1'
	    		),
	    		array(
	    			'skill' => 'Core Location', 
	    			'experience' => '2'
	    		),
	    		array(
	    			'skill' => 'AFNetworking', 
	    			'experience' => '2'
	    		),
	    		array(
	    			'skill' => 'Fabric', 
	    			'experience' => '2'
	    		),
	    		array(
	    			'skill' => 'NDK', 
	    			'experience' => '2'
	    		),
	    		array(
	    			'skill' => 'Gradle', 
	    			'experience' => '2'
	    		),
	    		array(
	    			'skill' => 'GSON', 
	    			'experience' => '2'
	    		),
	    		array(
	    			'skill' => 'Retrofit', 
	    			'experience' => '2'
	    		)
	    	]
	    ),
      array(
      'title' => 'API&apos;s',
      'data' =>   [
          array(
            'skill' => 'Google Map', 
            'experience' => 4
          ),
          array(
            'skill' => 'Facebook', 
            'experience' => 2
          ),
          array(
            'skill' => 'Stripe', 
            'experience' => 2
          )
        ]
      ),
	    array(
			'title' => 'Tools',
			'data' => 	[
	    		array(
	    			'skill' => 'XCode'
	    		),
	    		array(
	    			'skill' => 'Git | Subversion'
	    		),
	    		array(
	    			'skill' => 'Netbeans | Sublime'
	    		),
	    		array(
	    			'skill' => 'Eclipse | Android Studio'
	    		),
	    		array(
	    			'skill' => 'Trello | Pivotal Tracker'
	    		),
	    		array(
	    			'skill' => 'Teamwork'
	    		),
	    	]
	    ),
      array(
      'title' => 'Others',
      'data' =>   [
          array(
            'skill' => 'HTML | CSS', 
            'experience' => 4
          )
        ]
      )
	],
	'projects' => [
		array(
			'title' => 'Pixtacam',
			'description' => ''
		),
		array(
			'title' => 'Roche',
			'description' => ''
		),
		array(
			'title' => 'Yanbal',
			'description' => ''
		),
		array(
			'title' => 'Faveo',
			'description' => ''
		),
		array(
			'title' => 'Vetted',
			'description' => ''
		),
		array(
			'title' => 'Alumnify',
			'description' => ''
		),
		array(
			'title' => 'Onmyblock',
			'description' => ''
		),
		array(
			'title' => 'Mifarma',
			'description' => ''
		)
	],
	'experience' => [
		array(
			'experience' => '',
			'location' => 'Appslovers',
			'description' => 'Android / IOS Development'
		),
		array(
			'experience' => '',
			'location' => 'Synopsis',
			'description' => 'Development of multiple web projects in Java.'
		),
		array(
			'experience' => '',
			'location' => 'Novatronic',
			'description' => 'Development of multiple web projects in Java.'
		)
	],
	'education' => [
		array(
			'education' => 'Systems Engineering',
			'location' => 'UNMSM, Lima, Peru'
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
header('Content-Type: application/json');
echo json_encode($data['user']);
?>
