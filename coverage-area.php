<?php
    /*Template Name: Coverage Area*/
?>

<?php get_header(); ?>

<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/utils.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/coverage-area.css">

<main>
        <section class="coverage-area">
            <h2>Coverage Area</h2>

            <div class="spacer"></div>

            <p class="paragraph-j">Netflow's extensive network spans across Pakistan, covering major cities and towns in Punjab, Sindh, Khyber Pakhtunkhwa, and Balochistan. With a strong presence in urban centers and a growing reach into rural areas, Netflow is committed to connecting Pakistan through reliable and high-speed internet services.</p>
        </section>

        <section class="map">

            <iframe src="https://www.google.com/maps/d/embed?mid=1cKUWTA_tMfVYReZy4JZMIZVpZ65MKDk&ehbc=2E312F" width="80%" height="600"></iframe>
        </section>

        <section class="provinces">
            <div class="province punjab">
                <h3>Punjab</h3>
                <p class="paragraph-j">Lahore, Kasur, Faisalabad, Sheikhupura, Sargodha, Gujranwala, Sahiwal, Multan, Bahawalpur, Rahimyar Khan, D.G. Khan, Jhang, Retra, Talagang, Mandi Bahauddin, Morekhunda, Mianchannu, Liaqatpur, Rojha, Fazilpur, Kalari, Bhaipheru, Gujrat, Sialkot, Lalamusa, Jehlum, Dina, Mirpur Industrial Area, Rawalpindi, Okara, Murree.</p>
            </div>

            <div class="spacer"></div>

            <div class="province kpk">
                <h3>KPK</h3>
                <p class="paragraph-j">Charsadda, Taxila, Haripur, Hattar (Industrial Area), Swat, Mardan, Nowshera, Bannu, Shehbazkhel, Lachi, Landi Kotal, D.I.Khan, Abbottabad, Mansehra, Peshawar.</p>
            </div>

            <div class="spacer"></div>

            <div class="province sindh">
                <h3>Sindh</h3>
                <p class="paragraph-j">NawabShah, Hyderabad, Dadu, Larkana, Shikarpur, Sukkur, Karachi, Thal, Dherki, Khandhkot, Ranipur, Morror, Thatta, Nooria Abad, Jamshoro.</p>
            </div>

            <div class="spacer"></div>

            <div class="province balochistan">
                <h3>Balochistan</h3>
                <p class="paragraph-j">Quetta and Chaman.</p>
            </div>

            <div class="spacer"></div>
        </section>
        
        <section class="call-to-action">
        
            <h2>Have Any Questions?</h2>

            <p class="paragraph">
                If you have any questions or need further clarification on our products/services, please don't hesitate to reach out. Our dedicated team is here to assist you.
            </p>

            <div class="button-section">
                <a href="contact-us">
                    <button class="btnSecondary">Contact us</button>
                </a>
            </div>

        </section>
    </main>

<?php get_footer(); ?>
