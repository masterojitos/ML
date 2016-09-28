<?php
/****************** DATA USER PROFILE ******************/
$data['user'] = array(
	'first_name' => 'Axel',	
	'full_name' => 'Axel Lessio',
	'image' => '../../images/axel.jpg',
	'title_professional' => 'UI/UX Designer',
	'member_since' => 2014,
	'abstract' => 'Axel is a versatile UI/UX designer from Italy, specialised in user-centred, iterative design in agile/lean development environments. His main skills are UI/UX design, analysis and prototyping, interaction design, responsive web design, marketing-oriented content strategy, and he\'s able to collaborate with front-end developers as well as content writers.',
	'top_skills' => [
		array(
			'skill' => 'UI/UX Design',
			'experience' => 4
		),
		array(
			'skill' => 'Responsive Web Design',
			'experience' => 4
		),
		array(
			'skill' => 'Interaction Design',
			'experience' => 4
		),
		array(
			'skill' => 'Content Strategy',
			'experience' => 4
		),
		array(
			'skill' => 'Marketing',
			'experience' => 4
		)
	],
	'skills' => [
		array(
			'title' => 'Languages',
			'data' => 	[
	    		array(
					'skill' => 'HTML5',
					'experience' => 4
				),
				array(
					'skill' => 'CSS3',
					'experience' => 4
				),
				array(
					'skill' => 'SASS',
					'experience' => 4
				),
				array(
					'skill' => 'JavaScript',
					'experience' => 4
				),
				array(
					'skill' => 'PHP',
					'experience' => 4
				)
	    	]
	    ),
	    array(
			'title' => 'Frameworks',
			'data' => 	[
	    		array(
	    			'skill' => 'jQuery', 
	    			'experience' => 4
	    		)
	    	]
	    ),
	    array(
			'title' => 'Tools',
			'data' => 	[
	    		array(
	    			'skill' => 'Photoshop'
	    		),
	    		array(
	    			'skill' => 'Invision'
	    		),
	    		array(
	    			'skill' => 'UXPin'
	    		),
	    		array(
	    			'skill' => 'Sketch'
	    		),
	    		array(
	    			'skill' => 'Principle'
	    		),
	    		array(
	    			'skill' => 'Illustrator'
	    		),
	    		array(
	    			'skill' => 'Sublime Text'
	    		),
	    		array(
	    			'skill' => 'Prepros'
	    		),
	    		array(
	    			'skill' => 'WordPress'
	    		)
	    	]
	    )
	],
	'projects' => [
		array(
			'title' => 'Waggl',
			'description' => 'Cross-platform UI/UX design of app features as well as various marketing-oriented designs (website sections, emails, infographics).'
		),
		array(
			'title' => 'Wyscout',
			'description' => 'UI/UX design of new features and redesign of the platform with a lot of different UI/UX design solutions and patterns.<br /><a href="http://wyscout.com/" target="_blank">http://wyscout.com/</a>'
		),
		array(
			'title' => 'Smartbus',
			'description' => 'Mobile app and desktop user dashboard UI/UX design for innovative public transportation systems, inspired by Orbita Line, a project by Skanatek AB.<br /><a href="http://axellessio.com/works/smartbus-mobile-app/" target="_blank">http://axellessio.com/works/smartbus-mobile-app/</a><br /><a href="http://axellessio.com/works/smartbus-user-dashboard/" target="_blank">http://axellessio.com/works/smartbus-user-dashboard/</a>'
		),
		array(
			'title' => 'Giacomo Barboni Producer',
			'description' => 'Design and development of Giacomo Barboni\'s personal website, 100% custom WordPress theme and integration with SoundCloud.<br /><a href="http://giacomobarboni.com/" target="_blank">http://giacomobarboni.com/</a>'
		)
	],
	'experience' => [
		array(
			'experience' => 'UI/UX & Web Designer',
			'location' => 'Tecla Labs',
			'description' => 'Design of digital experiences and user interfaces both for desktop and mobile devices.'
		),
		array(
			'experience' => 'UI/UX Designer',
			'location' => 'Wyscout.com',
			'description' => 'Redesign of the Wyscout platform and design of new features.'
		),
		array(
			'experience' => 'Web designer & Developer',
			'location' => 'Interlaced Srl',
			'description' => 'Design and development of responsive websites and custom WordPress themes.'
		),
		array(
			'experience' => 'UI/Web Designer',
			'location' => 'Skanatek AB',
			'description' => 'Design of various design material concerning the Orbita Line project.'
		)
	],
	'education' => [
		array(
			'education' => 'Graphic design degree',
			'location' => 'Civiform, Italy'
		),
		array(
			'education' => 'UI/UX design courses',
			'location' => 'Interaction Design Foundation, Denmark (online)'
		),
		array(
			'education' => 'Web/UI development courses',
			'location' => 'Treehouse, Lynda.com, Codecademy'
		),
		array(
			'education' => 'Web design internship',
			'location' => 'Espressione Srl, Italy'
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
		),
		array(
			'language' => 'Italian',
			'description' => 'Fluent'
		),
		array(
			'language' => 'Swedish',
			'description' => 'Fluent'
		)
	]
);
/****************** DATA USER PROFILE ******************/

$title = 'Profile Developers | Tecla.io';
include '../head.php';
include '../base.php';
?>
