<section id="content">
	<div class="content-wrap">
    <div class="container clearfix">
			
			<!--header profile-->
			<div id="profile-developer">
				<div class="small-thumbs topmargin-sm">
					<div class="entry clearfix nobottomborder nobottommargin">
						<div class="entry-image">
							<a href="<?php echo $data['user']['image']; ?>" data-lightbox="image"><img class="image_fade" src="<?php echo $data['user']['image']; ?>" alt="Standard Post with Image" style="opacity: 1;"></a>
						</div>
						<div class="entry-c col-paddingleft-xs">
							<div class="entry-title">
								<h1><?php echo $data['user']['full_name']; ?></h1>
							</div>
							<ul class="entry-meta clearfix">
								<li><?php echo $data['user']['title_professional']; ?></li>
								<li>Member since <?php echo $data['user']['member_since']; ?></li>
							</ul>
							<div class="entry-content topmargin-sm">
								<p><?php echo $data['user']['abstract']; ?></p>										
							</div>

							<div id="tags" class="clearfix">
								<div class="tagcloud tags-bg cursor-default">
									<?php $top_skills = $data['user']['top_skills']; ?>
									<?php $countTopSkills = sizeof($top_skills); ?>
									<?php for ($i=0; $i < $countTopSkills; $i++) { ?>
										<a href="javascript:void(0)" data-toggle="tooltip" title="<?php echo $top_skills[$i]['experience']; ?> year(s)">
											<?php echo $top_skills[$i]['skill']; ?>
										</a><br/>
									<?php } ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div><!--#header profile-->
			
			<div class="postcontent nobottommargn clearfix">
				<!--Porfolio-->
				<div class="accordion-bg clearfix">
					<div class="fancy-title title-bottom-border">
						<h3>Skills</h3>
					</div>
					<?php $skills = $data['user']['skills']; ?>						
						<?php $countSkills = sizeof($skills); ?>
						<?php for ($i=0; $i < $countSkills; $i++) { ?>

							<?php if( $i%4 == 0){ ?>
							<div class="acc_content clearfix">
							<?php }; ?>
								

								<div class="col_one_fourth nobottommargin <?php if( ($i+1)%4 == 0 ) { echo 'col_last'; } ?>">
									<ul class="iconlist iconlist-color nobottommargin">
										<li><i class="icon-play"></i><strong><?php echo $skills[$i]['title']; ?></strong>
											<ul class="iconlist iconlist-color bottommargin-sm">
												<?php $languages = $skills[$i]['data']; ?>
												<?php $countLanguages = sizeof($languages); ?>
												<?php for ($j=0; $j < $countLanguages; $j++) { ?>												
													<li>
														<i class="icon-ok"></i>
														<span data-toggle="tooltip" title="<?php if( $languages[$j]['experience'] ) echo $languages[$j]['experience']." year(s)"; ?>">
															<?php echo $languages[$j]['skill']; ?>
														</span>
													</li>
												<?php } ?>
											</ul>
										</li>
									</ul>
								</div>
							<?php if( ($i+1)%4 == 0 || $i+1 == $countSkills ){ ?>	
							</div>
							<?php }; ?>
					<?php }; ?>

					<div class="fancy-title title-bottom-border">
						<h3>Projects</h3>
					</div>
					<div class="acc_content clearfix">
						<ul class="iconlist iconlist-color nobottommargin">
							<?php $projects = $data['user']['projects']; ?>
							<?php $countProjects = sizeof($projects); ?>
							<?php for ($j=0; $j < $countProjects; $j++) { ?>
								<li><i class="icon-play"></i><strong><?php echo $projects[$j]['title']; ?></strong>
									<?php if($projects[$j]['position']) echo "- ".$projects[$j]['position']; ?>
									<p><?php echo $projects[$j]['description']; ?></p>
								</li>
							<?php }; ?>
						</ul>
					</div>

					<div class="fancy-title title-bottom-border">
						<h3>Experience</h3>
					</div>
					<div class="acc_content clearfix">
						<ul class="iconlist iconlist-color nobottommargin">
							<?php $experiences = $data['user']['experience']; ?>
							<?php $countExperiences = sizeof($experiences); ?>
							<?php for ($j=0; $j < $countExperiences; $j++) { ?>
								<li>
									<i class="icon-play"></i>
									<strong><?php echo $experiences[$j]['experience']; ?></strong>
									<?php if($experiences[$j]['location']) echo "- ".$experiences[$j]['location']; ?>
									<p><?php echo $experiences[$j]['description']; ?></p>
								</li>
							<?php }; ?>
						</ul>
					</div>

					<div class="fancy-title title-bottom-border">
						<h3>Education</h3>
					</div>
					<div class="acc_content clearfix">
						<ul class="iconlist iconlist-color">
							<?php $educations = $data['user']['education']; ?>
							<?php $countEducations = sizeof($educations); ?>
							<?php for ($j=0; $j < $countEducations; $j++) { ?>
								<li>
									<i class="icon-play"></i>
									<strong><?php echo $educations[$j]['education']; ?></strong> 
									<?php if($educations[$j]['location']) echo "- ".$educations[$j]['location']; ?>
								</li>
							<?php }; ?>
						</ul>
					</div>
					
					<div class="fancy-title title-bottom-border">
						<h3>Languages</h3>
					</div>
					<div class="acc_content clearfix">
						<ul class="iconlist iconlist-color nobottommargin">
							<?php $_languages = $data['user']['languages']; ?>
							<?php $_countLanguages = sizeof($_languages); ?>
							<?php for ($j=0; $j < $_countLanguages; $j++) { ?>
								<li>
									<i class="icon-play"></i>
									<strong><?php echo $_languages[$j]['language']; ?></strong> - <?php echo $_languages[$j]['description']; ?>
								</li>
							<?php }; ?>
						</ul>
					</div>
				</div><!--#Porfolio end-->
			</div>
    </div>
  </div>
</section><!-- #content end -->