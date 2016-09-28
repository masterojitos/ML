<?php
/****************** DATA USER PROFILE ******************/
$data['user'] = array(
	'first_name' => 'Harold',	
	'full_name' => 'Harold Coronado',
	'image' => '../../images/harold.jpg',
	'title_professional' => 'Full Stack Developer',
	'member_since' => 2014,
	'abstract' => 'Harold is a web designer and front-end developer focused on standards, performance and good practices when building web applications and sites. Harold is a front-end developer passionate about user experience, high quality CSS, and using the latest technologies to bring user-facing functionality to life.',
	'top_skills' => [
		array(
			'skill' => 'HTML',
			'experience' => 8
		),
		array(
			'skill' => 'CSS',
			'experience' => 8
		),
		array(
			'skill' => 'JavaScript',
			'experience' => 8
		),
		array(
			'skill' => 'jQuery',
			'experience' => 8
		),
		array(
			'skill' => 'AngularJS',
			'experience' => 2
		)
	],
	'skills' => [
		array(
			'title' => 'Lenguages/Technologies',
			'data' => 	[
	    		array(
					'skill' => 'HTML',
					'experience' => 8
				),
				array(
					'skill' => 'CSS',
					'experience' => 8
				),
				array(
					'skill' => 'JavaScript',
					'experience' => 8
				),
				array(
					'skill' => 'jQuery',
					'experience' => 8
				),
				array(
					'skill' => 'AngularJS',
					'experience' => 2
				),
				array(
					'skill' => 'CoffeeScript',
					'experience' => 1
				),
				array(
					'skill' => 'Grunt',
					'experience' => 2
				),
				array(
					'skill' => 'Gulp',
					'experience' => 1
				),
				array(
					'skill' => 'Saas',
					'experience' => 3
				),
				array(
					'skill' => 'SVG',
					'experience' => 1
				),
				array(
					'skill' => 'WordPress',
					'experience' => 6
				)
	    	]
	    ),
	    array(
			'title' => 'Design',
			'data' => 	[
	    		array(
	    			'skill' => 'Web Design', 
	    			'experience' => '6'
	    		),
	    		array(
	    			'skill' => 'UI', 
	    			'experience' => '6'
	    		),
	    		array(
	    			'skill' => 'UX', 
	    			'experience' => '6'
	    		),
	    		array(
	    			'skill' => 'Responsive Design', 
	    			'experience' => '5'
	    		)
	    	]
	    ),
	    array(
			'title' => 'Software',
			'data' => 	[
	    		array(
	    			'skill' => 'Photoshop CC',
	    			'experience' => '5'
	    		),
	    		array(
	    			'skill' => 'Illustrator CC',
	    			'experience' => '1'
	    		)
	    	]
	    ),
	    array(
			'title' => 'Tools',
			'data' => 	[
	    		array(
	    			'skill' => 'Git/GitHub'
	    		)
	    	]
	    )
	],
	'projects' => [
		array(
			'title' => 'Pardos Chicken',
			'description' => 'Marketing site for one of the most important food chains in Peru. Front-end development and WordPress integration.'
		),
		array(
			'title' => 'Swaggle App',
			'description' => 'Mobile app that allows golf instructors to connect with students. Hybrid mobile app made with Ionic framework.'
		),
		array(
			'title' => 'Waggl',
			'description' => 'Web app that allows organizations to listen to employers. Front-end developed using Backbone.js'
		),
		array(
			'title' => 'SkillClub.io',
			'description' => 'Front-end development using AngularJS.'
		)
	],
	'experience' => [
		array(
			'experience' => 'Front-end Web Developer',
			'location' => 'Tecla Labs',
			'description' => 'Front-end web development using wide range of technologies. Wide use of HTML5, JavaScript (jQuery, AngularJS), CSS3, preprocessors (SASS) and other technologies as SVG, Grunt and Emmet.'
		),
		array(
			'experience' => 'Web Designer',
			'location' => 'PaginasWeb.pe',
			'description' => 'Design and web front-end development.'
		),
		array(
			'experience' => 'Web Designer',
			'location' => 'Freelance',
			'description' => 'Web designer and developer.'
		),
		array(
			'experience' => 'Full-stack Web Developer',
			'location' => 'Pit-eck Color USA Inc.',
			'description' => 'Development of e-commerce platform.'
		)
	],
	'education' => [
		array(
			'education' => 'Computer Science',
			'location' => 'ISTP Abaco, Peru'
		)
	],
	'languages' => [
		array(
			'language' => 'Spanish',
			'description' => 'Native'
		),
		array(
			'language' => 'English',
			'description' => 'Fluent (speaking/reading/writing)'
		)
	]
);
/****************** DATA USER PROFILE ******************/
header('Content-Type: application/json');
echo json_encode($data['user']);
?>
