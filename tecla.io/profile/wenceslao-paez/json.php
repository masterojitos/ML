<?php
/****************** DATA USER PROFILE ******************/
$data['user'] = array(
	'first_name' => 'Wenceslao',
	'full_name' => 'Wenceslao P&aacute;ez Ch&aacute;vez',
	'image' => '../../images/wcpaez.jpg',
	'title_professional' => 'Software Developer',
	'member_since' => 2015,
	'abstract' => 'Wenceslao is a backend developer specializing in Ruby on Rails development. He is proactive and enjoys nothing more than testing and debugging his work thoroughly. He has many years of experience as a backend developer working with technologies such as Ruby, JavaScript, Python, Sinatra, and more.',
	'top_skills' => [
		array(
			'skill' => 'JavaScript',
			'experience' => 3,
		),
		array(
			'skill' => 'AngularJS',
			'experience' => 3,
		),
		array(
			'skill' => 'Backbone',
			'experience => 3'
		),
		array(
			'skill' => 'Ruby on Rails',
			'experience' => 3,
		),
		array(
			'skill' => 'TDD',
			'experience' => 3,
		),
		array(
			'skill' => 'BDD',
			'experience' => 3,
		),
		array(
			'skill' => 'REST',
			'experience' => 3,
		)
	],
	'skills' => [
		array(
			'title' => 'Languages',
			'data' => 	[
	    		array(
	    			'skill' => 'Ruby', 
	    			'experience' => '3'
	    		),
	    		array(
	    			'skill' => 'JavaScript', 
	    			'experience' => '3'
	    		),
	    		array(
	    			'skill' => 'Python', 
	    			'experience' => '3'
	    		)
	    	]
	    ),
	    array(
			'title' => 'Libraries/APIs',
			'data' => 	[
	    		array(
	    			'skill' => 'AngularJs', 
	    			'experience' => '3'
	    		),
	    		array(
	    			'skill' => 'Backbone', 
	    			'experience' => '3'
	    		),
	    		array(
	    			'skill' => 'Jquery', 
	    			'experience' => '3'
	    		),
	    		array(
	    			'skill' => 'Coffescript', 
	    			'experience' => '3'
	    		),
	    		array(
	    			'skill' => 'Postgres', 
	    			'experience' => '3'
	    		),
	    		array(
	    			'skill' => 'Redis', 
	    			'experience' => '3'
	    		)
	    	]
	    ),
	    array(
			'title' => 'Frameworks',
			'data' => 	[
	    		array(
	    			'skill' => 'Ruby on Rails', 
	    			'experience' => '3'
	    		),
	    		array(
	    			'skill' => 'Sinatra', 
	    			'experience' => '3'
	    		)
	    	]
	    ),
	    array(
			'title' => 'Tools',
			'data' => 	[
	    		array(
	    			'skill' => 'Git | GitHub'
	    		),
	    		array(
	    			'skill' => 'Heroku'
	    		),
	    		array(
	    			'skill' => 'Codeship'
	    		),
	    		array(
	    			'skill' => 'Codeclimate'
	    		),
	    		array(
	    			'skill' => 'RSpec'
	    		),
	    		array(
	    			'skill' => 'TDD'
	    		),
	    		array(
	    			'skill' => 'BDD'
	    		),
	    		array(
	    			'skill' => 'Karma'
	    		),
	    		array(
	    			'skill' => 'Jasmine'
	    		),
	    		array(
	    			'skill' => 'Trello and PivotalTracker'
	    		),
	    		array(
	    			'skill' => 'Vim'
	    		),
	    		array(
	    			'skill' => 'Slack, Hipchat'
	    		)
	    	]
	    )
	],
	'projects' => [
		array(
			'title' => 'Waggl',
			'description' => 'Waggl is a simple way to listen to employees, distill insights and improve the culture of an organization. The Waggl platform is built using Ruby on Rails and Backbone.js.'
		),
		array(
			'title' => 'Fasply',
			'description' => 'SaaS application built with AngularJS and Rails. Use of tools like CodeClimate, CodeShip, Testing with RSpec, Karma and Jasmine.'
		)
	],
	'experience' => [
		array(
			'experience' => 'Software Developer',
			'location' => 'Tecla Labs',
			'description' => 'Full stack developer working mainly with Ruby on Rails.'
		)
	],
	'education' => [
		array(
			'education' => 'Bachelor of Systems Engineering',
			'location' => 'Universidad Continental, Peru'
		)
	],
	'languages' => [
		array(
			'language' => 'English',
			'description' => 'Fluent (speaking/reading/writing)'
		),
		array(
			'language' => 'Spanish',
			'description' => 'Native'
		)
	]
);
/****************** DATA USER PROFILE ******************/
header('Content-Type: application/json');
echo json_encode($data['user']);
?>
