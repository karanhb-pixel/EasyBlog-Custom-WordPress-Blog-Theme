<?php
// Template Name: Contact Us

get_header();
$imagePath = get_template_directory_uri();
$page_id = get_queried_object_id();
$address = get_field('address', $page_id);
$phone_no = get_field('phone_no', $page_id);
$email = get_field('email', $page_id);
$map_link = get_field('map_link', $page_id);
?>
<div class="contact_Page" id="contact_Page">
    <?php get_sidebar()?>
    <div class="right">

        <div class="contact_Page_headingtext">
            <h1>Get in Touch</h1>
            <h4>
                Contact us to publish your content and show ads to our website and get
                a good reach.
            </h4>
    
            <div class="contact_Page_info">
                <div class="contact_Page_info_Container">
                    <div class="icon">
    
                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em"
                            width="1em" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M12.6727 1.61162 20.7999 9H17.8267L12 3.70302 6 9.15757V19.0001H11V21.0001H5C4.44772 21.0001 4 20.5524 4 20.0001V11.0001L1 11.0001 11.3273 1.61162C11.7087 1.26488 12.2913 1.26488 12.6727 1.61162ZM14 11H23V18H14V11ZM16 13V16H21V13H16ZM24 21H13V19H24V21Z">
                            </path>
                        </svg>
                    </div>
                    <div class="office-text">office</div>
                    <div class="address-text"><?php echo $address?></div>
                </div>
                <div class="contact_Page_info_Container">
                    <div class="icon">
    
                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 1024 1024" height="1em"
                            width="1em" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M928 160H96c-17.7 0-32 14.3-32 32v640c0 17.7 14.3 32 32 32h832c17.7 0 32-14.3 32-32V192c0-17.7-14.3-32-32-32zm-40 110.8V792H136V270.8l-27.6-21.5 39.3-50.5 42.8 33.3h643.1l42.8-33.3 39.3 50.5-27.7 21.5zM833.6 232L512 482 190.4 232l-42.8-33.3-39.3 50.5 27.6 21.5 341.6 265.6a55.99 55.99 0 0 0 68.7 0L888 270.8l27.6-21.5-39.3-50.5-42.7 33.2z">
                            </path>
                        </svg>
                    </div>
                    <div class="office-text">Email</div>
                    <div class="address-text"><?php echo $email?></div>
                </div>
                <div class="contact_Page_info_Container">
                    <div class="icon">
    
                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 1024 1024" height="1em"
                            width="1em" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M877.1 238.7L770.6 132.3c-13-13-30.4-20.3-48.8-20.3s-35.8 7.2-48.8 20.3L558.3 246.8c-13 13-20.3 30.5-20.3 48.9 0 18.5 7.2 35.8 20.3 48.9l89.6 89.7a405.46 405.46 0 0 1-86.4 127.3c-36.7 36.9-79.6 66-127.2 86.6l-89.6-89.7c-13-13-30.4-20.3-48.8-20.3a68.2 68.2 0 0 0-48.8 20.3L132.3 673c-13 13-20.3 30.5-20.3 48.9 0 18.5 7.2 35.8 20.3 48.9l106.4 106.4c22.2 22.2 52.8 34.9 84.2 34.9 6.5 0 12.8-.5 19.2-1.6 132.4-21.8 263.8-92.3 369.9-198.3C818 606 888.4 474.6 910.4 342.1c6.3-37.6-6.3-76.3-33.3-103.4zm-37.6 91.5c-19.5 117.9-82.9 235.5-178.4 331s-213 158.9-330.9 178.4c-14.8 2.5-30-2.5-40.8-13.2L184.9 721.9 295.7 611l119.8 120 .9.9 21.6-8a481.29 481.29 0 0 0 285.7-285.8l8-21.6-120.8-120.7 110.8-110.9 104.5 104.5c10.8 10.8 15.8 26 13.3 40.8z">
                            </path>
                        </svg>
                    </div>
                    <div class="office-text">Phone</div>
                    <div class="address-text"><?php echo $phone_no?></div>
                </div>
            </div>
        </div>
        <div class="contact_Page_map">
            <iframe src="<?php echo $map_link?>" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

        </div>
        <div class="contact_Page_formcontainer">
            <form action="#" method="post" class="contact_Page_form" aria-label="Contact form">
                <div class="contact_Page_formgroup">
                    <label htmlFor="name">Name</label>
                    <input type="text" id="name" name="name" placeholder="Enter Name..." required aria-required="true"
                        aria-label="Name" autoComplete="name" />
                </div>
                <div class="contact_Page_formgroup">
                    <label htmlFor="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="Enter Email..." required aria-required="true"
                        aria-label="Email" autoComplete="email" />
                </div>
                <div class="contact_Page_formgroup">
                    <label htmlFor="phone">Phone</label>
                    <input type="tel" id="phone" name="phone" placeholder="Enter Phone Number..." required
                        aria-required="true" aria-label="Phone" autoComplete="tel" />
                </div>
                <div class="contact_Page_formgroup">
                    <label htmlFor="subject">Subject</label>
                    <input type="text" id="subject" name="subject" placeholder="Enter subject..." required
                        aria-required="true" aria-label="Subject" />
                </div>
                <div class="contact_Page_formgroup formtextarea">
                    <label htmlFor="message">Message</label>
                    <textarea id="message" name="message" placeholder="Enter Message..." rows="4" cols={4} required
                        aria-required="true" aria-label="Message"></textarea>
                </div>
                <div class="form_submit_btn">
                    <button type="submit" aria-label="Send Message">Send Message</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php get_footer(); ?>