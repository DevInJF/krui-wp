
<div class="division-topbar">
    <div class="wrapper">
        <div class="division-directory clearfix">
            <div class="dosl-wrapper clearfix">
                <a href="http://studentlife.uiowa.edu/" class="dosl">
                    <img src="<?php echo get_template_directory_uri(); ?>/division-bar/images/division-bar/dosl-logo.png" alt="Division of Student Life">
                </a>
                <p class="adr">
                    The Division of Student Life fosters student success by creating and promoting inclusive educationally purposeful services and activities within and beyond the classroom.
                </p>
            </div>
<ul class="division-menu">
                <li class="has-subnav">
                    <a href="#" class="directory-link">Directory Navigation</a>
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
                            <li><a href="http://wrac.uiowa.edu/" target="_blank">Women&rsquo;s Resource &amp; Action Center</a></li>
                            <li><a href="http://vp.studentlife.uiowa.edu" target="_blank">Vice President for Student Life</a></li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div><!-- end .division-directory -->
        <div class="clearfix">
            <a href="http://www.uiowa.edu/" class="uiowa">
                <img src="<?php echo get_template_directory_uri(); ?>/division-bar/images/division-bar/uiowa.png" alt="The University of Iowa" width="177">
            </a>

            <a href="#" class="directory-toggle">
                <img src="<?php echo get_template_directory_uri(); ?>/division-bar/images/division-bar/division_studentlife.png" alt="Division of Student Life" width="224">
            </a>
		    	<a href="#" class="search-toggle">Search</a>
        </div>
        <div class="division-search">
            <form action="/" method="get">
	            <label for="search">Search in <?php echo home_url( '/' ); ?></label>
                <input type="search" placeholder="Search" results="5" name="s" class="division-search-input" value="<?php the_search_query(); ?>" />
                <input type="submit" class="division-search-btn">
            </form>
        </div> 
     </div>
</div>
