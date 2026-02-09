<div class="robotics_footer_portion">
    <div class="footer-section">
        <div class="container">       
            <div class="copyright">
                <div class="row">
                    <div class="col-12 text-center">
                        <p class="mb-0 text-size-16 text-white footer-text">
                            Copyrights <?php echo date("Y"); ?> © WhiteNoise<br>
                            Web Solutions by <a href="https://www.renderinfotech.com/" target="_blank" class="footer-link">Render Infotech</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    /* Footer Styling */
    .robotics_footer_portion {
        background: linear-gradient(135deg, #1a1a2e 0%, #16213e 100%);
        padding: 10px 0;
        margin-top: 80px;
    }

    .footer-section {
        width: 100%;
    }

    .copyright {
        text-align: center;
    }

    .footer-text {
        color: #ffffff;
        font-size: 16px;
        line-height: 1.8;
        font-weight: 400;
    }

    .footer-link {
        color: #3b8edb;
        text-decoration: none;
        font-weight: 500;
        transition: all 0.3s ease;
        display: inline-block;
    }

    .footer-link:hover {
        color: #ffffff;
        transform: translateX(3px);
    }

    /* Tablet Responsive */
    @media (max-width: 991px) {
        .robotics_footer_portion {
            padding: 10px 0;
            margin-top: 60px;
        }

        .footer-text {
            font-size: 15px;
        }
    }

    /* Mobile Responsive */
    @media (max-width: 767px) {
        .robotics_footer_portion {
            padding: 10px 0;
            margin-top: 50px;
        }

        .footer-text {
            font-size: 14px;
            line-height: 1.6;
        }
    }

    /* Small Mobile */
    @media (max-width: 480px) {
        .robotics_footer_portion {
            padding: 10px 0;
            margin-top: 40px;
        }

        .footer-text {
            font-size: 13px;
        }
    }
</style>
