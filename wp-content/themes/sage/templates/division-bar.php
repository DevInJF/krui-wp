
<div class="division-topbar" role="navigation" aria-label="Division Directory and Search">
    <div class="container">
        <div class="division-directory clearfix">
            <div class="dosl-wrapper clearfix">
                <a href="http://studentlife.uiowa.edu/" class="dosl">
                    <img src="<?php echo get_template_directory_uri();?>/dist/images/division-bar/dosl-logo.png" alt="Division of Student Life">
                </a>
                <p class="adr">
                    The Division of Student Life fosters student success by creating and promoting inclusive educationally purposeful services and activities within and beyond the classroom.
                </p>
            </div>
<ul class="division-menu" aria-hidden="true" id="collapsible-0"> 
                <li class="has-subnav">
                    <!-- <a href="#" class="directory-link">Directory Navigation</a> -->
                    <div class="division-show-hide">
 			<ul class="menu-list">
                            <li><a href="http://studentlife.uiowa.edu/" target="_blank">Division of Student Life</a></li>
                            <li><a href="http://csil.uiowa.edu/" target="_blank">Center for Student Involvement &amp; Leadership</a></li>
                            <li><a href="http://counseling.studentlife.uiowa.edu" target="_blank">Counseling Service</a></li>
                            <li><a href="http://dos.uiowa.edu/" target="_blank">Dean of Students</a></li>
                            <li><a href="http://housing.uiowa.edu/" target="_blank">Housing & Dining</a></li>
                        </ul>
                        <ul class="menu-list">
                            <li><a href="http://imu.uiowa.edu/" target="_blank">Iowa Memorial Union</a></li>
                            <li><a href="http://pickone.uiowa.edu" target="_blank">Pick One</a></li>
                            <li><a href="http://recserv.uiowa.edu" target="_blank">Recreational Services</a></li>
                            <li><a href="http://rvap.org" target="_blank">Rape Victim Advocacy Program</a></li>
                            <li><a href="http://osmrc.uiowa.edu" target="_blank">Sexual Misconduct Response Coordinator</a></li>
                        </ul>
                        <ul class="menu-list">
                            <li><a href="http://sds.studentlife.uiowa.edu/" target="_blank">Student Disability Services</a></li>
                            <li><a href="http://studenthealth.uiowa.edu/" target="_blank">Student Health &amp; Wellness</a></li>
                            <li><a href="http://wrac.uiowa.edu/" target="_blank">Women&rsquo;
s Resource &amp;
 Action Center</a></li>
                            <li><a href="http://vp.studentlife.uiowa.edu" target="_blank">Vice President for Student Life</a></li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div><!-- end .division-directory -->
        <div class="clearfix">
            <a href="http://www.uiowa.edu/" class="uiowa" target="_blank">
                <img src="<?php echo get_template_directory_uri();?>/dist/images/division-bar/uiowa.png" alt="The University of Iowa" width="177">
            </a>

            <button aria-expanded="false" aria-controls="collapsible-0" class="directory-toggle" target="_blank"> 
                <img src="<?php echo get_template_directory_uri();?>/dist/images/division-bar/division_studentlife.png" alt="Division of Student Life" width="224">
            </button>
                <button aria-expanded="false" aria-controls="collapsible-1" class="search-toggle">Search</button>
        </div>
        <div class="division-search" id="collapsible-1">
            <form action="<?php echo home_url('/');?>" method="get">
                <label for="divisionsearchinput">Search <?php echo home_url('/');?></label>
                <input type="search" title="search" id="divisionsearchinput" placeholder="Search" results="5" name="s" class="division-search-input" value="<?php the_search_query();?>" />
                <label for="divisionsearchinput">Submit</label>
                <input type="submit" title="submit" class="division-search-btn" value="search">
            </form>
        </div>
     </div>
</div>








