<?php
    /*Template Name: TowerNet*/
?>

<?php get_header(); ?>

<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/utils.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/hamburger.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/towernet.css">

<main>
    <section class="page-header">
        <img src="<?php echo get_template_directory_uri(); ?>/Images/Towernet_logo.png" alt="">

        <h2>Scalable Fiber To The Tower Services</h2>

        <a href="contact"><button class="btnPrimary">Contact us</button></a>
    </section>

    <!-- Lightning-Fast Connectivity For Optimized Operations -->
    <section class="image-text-section">
        <div class="text-section">
            <h2>Lightning-Fast Connectivity For Optimized Operations</h2>
            <p class="paragraph2">Netflow’s TowerNet is a carrier-grade, future-proof, and scalable Fiber To The Tower (FTTT) service, combining optical fiber infrastructure, equipment, and managed capacities to link the primary telecommunication network to the cellular network towers. We are the key enabler for robust and efficient wireless communications, providing the necessary infrastructure to connect cellular towers with high-speed fiber optic connectivity. Trust us to deliver the speed, reliability, and scalability needed to drive your business forward in today’s fast-paced digital landscape.</p>
        </div>

        <div class="image-section">
            <img src="<?php echo get_template_directory_uri(); ?>/Images/towers/tower-1.jpg" alt="">
        </div>
    </section>

    <!-- Products and Services -->
    <section class="products-and-services">
        <h2>Products and Services</h2>

        <p class="paragraph2">Netflow offers a comprehensive suite of networking solutions to meet the diverse needs of businesses. Our services include Layer 2 & 3 IP MPLS, Colocation, IP Internet, and 24×7 Customer Care. We also provide high-speed connectivity options with GE & FE interfaces and dedicated account management for personalized support.</p>

        <div class="info-blocks">
            <div class="info-block">
                <h3>Layer 2 & 3 IP MPLS</h3>
            </div>
            <div class="info-block">
                <h3>Colocation Service</h3>
            </div>
            <div class="info-block">
                <h3>IP Internet</h3>
            </div>
            <div class="info-block">
                <h3>24×7 Customer Care</h3>
            </div>
            <div class="info-block">
                <h3>GE & FE Interfaces</h3>
            </div>
            <div class="info-block">
                <h3>Account Management</h3>
            </div>
        </div>
    </section>

    <!-- Feature and Benifits --> 
    <section class="features-and-benifits">
        <h2>Features and Benifits</h2>

        <div class="info-blocks">
            <div class="info-block">
                <h3>5G enablement through FTTT</h3>
            </div>
            <div class="info-block">
                <h3>Flexible lease & capacity-rich models</h3>
            </div>
            <div class="info-block">
                <h3>Reliable SLA compliance up to 99.99%</h3>
            </div>
            <div class="info-block">
                <h3>1,000 towers & 10 cities for Telenor, Jazz & Zong</h3>
            </div>
        </div>
    </section>

    <section class="why-FTTT">
        <div class="image-text-section">
            <div class="image-section">
                <img src="<?php echo get_template_directory_uri(); ?>/Images/towers/5g.jpg" alt="">
            </div>
            <div class="text-section">
                <h2>Why Fiber to the tower is a Game Changer?</h2>

                <p class="paragraph2">
                    With advances in 4G and the transition to 5G getting closer, traditional network backhaul models cannot fulfill the bandwidth demand generated at the user end. Cellular operators now need capacity-rich solutions with scalability and latency to serve high data volumes. While 4G services need a strong capacity backbone to serve the data needs of users per cell site, 5G will be operating on a 20–30x higher number of cells, with each site flooded with the enormous demand for data. Therefore, the deployment of deep fiber networks to the tower sites and bringing fiber closer to the end user is needed as a prerequisite to cater to the ever-increasing demand for communication services.
                </p>
            </div>
        </div>
    </section>

    <!-- How is Netflow's Towenet Bridging the connectivity Gap -->
    <section class="towernet-bridging">
        <div class="image-text-section">
            <div class="text-section">
                <h2>How Is Netflow’s Towernet Bridging The Connectivity Gap?</h2>

                <p class="paragraph2">
                    By installing fiber to the towers, operators can be more independent and responsive to their customers’ needs in terms of service offerings. With a fiber footprint across more than 120 cities and towns, Netflow enjoys an elite position to serve fiber to the tower services to cellular operators. Besides fulfilling the capacity gap, TowerNet services by Netflow are backed by a strong ecosystem of commercial, technical, and customer care competence.
                </p>
            </div>
            
            <div class="image-section">
                <img src="<?php echo get_template_directory_uri(); ?>/Images/towers/tower-3.jpg" alt="">
            </div>
        </div>
    </section>

    <!-- Call to action -->
    <section class="call-to-action">
        <h2>Have Any Questions?</h2>

        <p class="paragraph2">If you have any questions or need further clarification on our products/services, please don't hesitate to reach out. Our dedicated team is here to assist you.</p>

        <div class="button-section">
            <button class="btnSecondary">Contact us</button>
        </div>
    </section>
</main>

<?php get_footer(); ?>
