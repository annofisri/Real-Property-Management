<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Contact Us | Real Property Nepal
    </title>


    <?php include_once './includes/links.php'; ?>
</head>

<body>
    <?php
    include_once 'tags/header.php';
    echo navbar();
    ?>

    <section class="contact-us-hero-bg hero-bg">
        <div class="container">
            <div class="row">
                <div class="title col-12">
                    <h1 class="text-center">Our Contact</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="contact-us-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 appointment-form ">
                    <form action="" method="post" data-url="./api/submit_form.php" class="row">

                        <div class="col-md-6 ">
                            <label for="firstName">First Name*</label>
                            <input type="text" class="form-control" id="firstName" name="firstname" required />

                        </div>
                        <div class="col-md-6">
                            <label for="lastName">Last Name*</label>
                            <input type="text" class="form-control col-md-6" id="lastName" name="lastname" required />
                        </div>
                        <div class="col-md-6 mt-3">

                            <label for="email">Email*</label>
                            <input type="email" class="form-control col-md-6" id="email" name="email" required />
                        </div>
                        <div class="col-md-6 mt-3">

                            <label for="phone">Phone Number*</label>
                            <input type="tel" class="form-control col-md-6" id="phone" name="phone" required />
                        </div>
                        <div class="col-12 mt-4">
                            <textarea name="message" id="message" placeholder="Type your message here...." required class="form-control" rows="6"></textarea>
                        </div>

                        <div class="col-12 mt-4">
                            <button class="btn-send" type="submit">
                                Send Message
                            </button>
                        </div>
                    </form>
                </div>

                <div class="col-lg-4 ">

                    <div class="find-us-here">
                        <h5 class="title">Find us here</h5>

                        <ul class=" nav flex-column nav-opacity nav-gap-sm">
                            <li class="nav-item">
                                <a class="pe-0" href="tel:">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="19" viewBox="0 0 18 19" fill="none">
                                        <path d="M11.2876 4.63135C12.0201 4.77427 12.6934 5.13254 13.2211 5.6603C13.7489 6.18806 14.1071 6.8613 14.2501 7.59385M11.2876 1.63135C12.8095 1.80042 14.2288 2.48198 15.3123 3.5641C16.3957 4.64623 17.0791 6.0646 17.2501 7.58635M16.5001 13.5713V15.8213C16.5009 16.0302 16.4581 16.237 16.3745 16.4284C16.2908 16.6197 16.168 16.7915 16.0141 16.9327C15.8602 17.074 15.6785 17.1815 15.4806 17.2484C15.2828 17.3153 15.0731 17.3401 14.8651 17.3213C12.5572 17.0706 10.3403 16.282 8.39257 15.0188C6.58044 13.8673 5.04407 12.331 3.89257 10.5188C2.62506 8.56225 1.83625 6.33459 1.59007 4.01635C1.57133 3.80895 1.59598 3.59992 1.66245 3.40257C1.72892 3.20521 1.83575 3.02386 1.97615 2.87006C2.11654 2.71626 2.28743 2.59338 2.47792 2.50924C2.6684 2.4251 2.87433 2.38154 3.08257 2.38135H5.33257C5.69655 2.37777 6.04942 2.50666 6.32539 2.744C6.60137 2.98134 6.78163 3.31093 6.83257 3.67135C6.92754 4.3914 7.10366 5.09839 7.35757 5.77885C7.45848 6.04729 7.48032 6.33903 7.4205 6.61951C7.36069 6.89998 7.22172 7.15743 7.02007 7.36135L6.06757 8.31385C7.13524 10.1915 8.68991 11.7462 10.5676 12.8138L11.5201 11.8613C11.724 11.6597 11.9814 11.5207 12.2619 11.4609C12.5424 11.4011 12.8341 11.4229 13.1026 11.5238C13.783 11.7778 14.49 11.9539 15.2101 12.0488C15.5744 12.1002 15.9071 12.2838 16.145 12.5645C16.3828 12.8452 16.5092 13.2035 16.5001 13.5713Z" stroke="#4E4E4E" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                    Phone: 832-438-6090
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class=" " href="mailto:" target="_blank">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="19" viewBox="0 0 18 19" fill="none">
                                        <path d="M15.75 12.1313C15.75 12.5292 15.592 12.9107 15.3107 13.192C15.0294 13.4733 14.6478 13.6313 14.25 13.6313H5.25L2.25 16.6313V4.63135C2.25 4.23352 2.40804 3.85199 2.68934 3.57069C2.97064 3.28938 3.35218 3.13135 3.75 3.13135H14.25C14.6478 3.13135 15.0294 3.28938 15.3107 3.57069C15.592 3.85199 15.75 4.23352 15.75 4.63135V12.1313Z" stroke="#4E4E4E" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                    Email: gorkhalimanagement@gmail.com
                                </a>
                            </li>
                            <li class="nav-item">
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="19" viewBox="0 0 18 19" fill="none">
                                        <g clip-path="url(#clip0_162_1780)">
                                            <path d="M15.75 8.38135C15.75 13.6313 9 18.1313 9 18.1313C9 18.1313 2.25 13.6313 2.25 8.38135C2.25 6.59114 2.96116 4.87425 4.22703 3.60838C5.4929 2.34251 7.20979 1.63135 9 1.63135C10.7902 1.63135 12.5071 2.34251 13.773 3.60838C15.0388 4.87425 15.75 6.59114 15.75 8.38135Z" stroke="#4E4E4E" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M9 10.6313C10.2426 10.6313 11.25 9.62399 11.25 8.38135C11.25 7.13871 10.2426 6.13135 9 6.13135C7.75736 6.13135 6.75 7.13871 6.75 8.38135C6.75 9.62399 7.75736 10.6313 9 10.6313Z" stroke="#4E4E4E" stroke-linecap="round" stroke-linejoin="round" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_162_1780">
                                                <rect width="18" height="18" fill="white" transform="translate(0 0.881348)" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                    Location: Kathmandu, Nepal
                                </div>
                            </li>


                        </ul>
                    </div>


                </div>
            </div>
        </div>
    </section>

    <?php include_once 'tags/footer.php'; ?>

    <?php include_once './includes/scripts.php'; ?>
</body>

</html>