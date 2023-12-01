<div class="container mt-3">
    <div class="jumbotron mt-3 bg-gradient-info">
        <h1 class="display-4">Welcome to my website</h1>
        <!-- <p class="lead">Hello, <?= $nama; ?> !</p> -->
        <p class="lead text-white">Hello <span class="efek-tik"></span>,</p>
        <p class="lead text-white">I'm just learning to build this website app, So sorry if there are so many mistakes. :)</p>
        <hr class="my-4">
        <a class="btn btn-dark btn-lg" href="#profile" role="button">Profile</a>
        <a class="btn btn-dark btn-lg" href="#content" role="button">Content</a>
        <a class="btn btn-dark btn-lg" href="#contact" role="button">Contact</a>
    </div>
    <!-- profile -->
    <div class="content bg-gradient-light mb-4" style="min-height: 420px;" id="profile">
        <div class="container">
            <div class="row pt-4">
                <div class="col text-center">
                    <h2>My Profile</h2>
                </div>
            </div>
            <div class="slider row justify-content-center">
                <img src="<?= base_url('assets/'); ?>img/profile/default.png" class="rounded-circle img-thumbnail img-slideshow" style="width: 25%;">
                <img src="<?= base_url('assets/'); ?>img/profile/admin.png" class="rounded-circle img-thumbnail img-slideshow" style="width: 25%;">
                <img src="<?= base_url('assets/'); ?>img/profile/martis.png" class="rounded-circle img-thumbnail img-slideshow" style="width: 25%;">
                <!-- <button onclick="plusDivs(-1)">&raquo</button> -->
                <!-- <button onclick="plusDivs(1)">&laquo</button> -->
            </div>
            <!-- <img src="<?= base_url('assets/'); ?>img/profile/profile1.png" class="rounded-circle img-thumbnail img-slideshow" style="width: 25%;"> -->
            <div class="row justify-content-center pt-4">
                <div class="text-center mb-3">
                    <h1 class="display-4">Heru Setiawan</h1>
                    <h3 class="lead">Lecturer | Programmer | Gamer</h3>
                </div>
            </div>
        </div>
    </div>
    <!-- Content -->
    <section class="content bg-gradient-light mb-3" id="content" style="min-height: 420px;">
        <div class="container">
            <div class="row pt-4 mb-4">
                <div class="col text-center">
                    <h2>Content</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md mb-4">
                    <div class="card">
                        <img class="card-img-top" src="<?= base_url('assets/'); ?>img/thumbs/1.png" alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md mb-4">
                    <div class="card">
                        <img class="card-img-top" src="<?= base_url('assets/'); ?>img/thumbs/2.png" alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md mb-4">
                    <div class="card">
                        <img class="card-img-top" src="<?= base_url('assets/'); ?>img/thumbs/3.png" alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md mb-4">
                    <div class="card">
                        <img class="card-img-top" src="<?= base_url('assets/'); ?>img/thumbs/4.png" alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md mb-4">
                    <div class="card">
                        <img class="card-img-top" src="<?= base_url('assets/'); ?>img/thumbs/5.png" alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md mb-4">
                    <div class="card">
                        <img class="card-img-top" src="<?= base_url('assets/'); ?>img/thumbs/6.png" alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact -->
    <section class="contact" id="contact">
        <div class="container bg-success">
            <div class="row pt-4 mb-4">
                <div class="col text-center">
                    <h2>Contact</h2>
                </div>
            </div>
            <div class="row justify-content-center mt-3">
                <div class="col-lg-3">
                    <div class="card bg-info text-white mb-3 text-center">
                        <div class="card-body">
                            <h5 class="card-title">Contact Me</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h5>Location</h5>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"></h5>
                            <h6 class="card-subtitle mb-2 text-muted">My Home</h6>
                            <p class="card-text">Jl. Raya-kalitidu No. 183 Bojonegoro East Java Indonesia</p>
                            <p class="card-text"></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <form method="get" action="<?= base_url('home'); ?>#contact">
                        <div class="form-group">
                            <label for="nama">Your Name</label>
                            <input type="text" class="form-control" id="nama" name="nama" maxlength="14" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" id="email" name="email" maxlength="21" required>
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone Number</label>
                            <input type="text" class="form-control" id="phone" name="phone" maxlength="14" required>
                        </div>
                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea class="form-control" id="message" name="message" maxlength="100" required rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" name="submit" class="btn btn-primary">Send Message</button>
                        </div>
                    </form>
                </div>
                <div class="col-lg-3">
                    <div class="card row">
                        <div class="card-header bg-info text-white">
                            <h5>Your Message here</h5>
                        </div>
                        <div class="card-body">
                            <?php if (isset($_GET['submit'])) : ?>

                                <h5 class="card-title">From <?= $_GET['nama']; ?></h5>
                                <h6 class="card-subtitle mb-2 text-muted">Email : <?= $_GET['email']; ?></h6>
                                <h6 class="card-subtitle mb-2 text-muted">Phone : <?= $_GET['phone']; ?></h6>
                                <p class="lead text-gray-800 mb-1">Message</p>
                                <p>"<?= $_GET['message']; ?>"</p>
                            <?php elseif (!isset($_GET['submit'])) : ?>
                                <h5 class="card-title">From </h5>
                                <h6 class="card-subtitle mb-2 text-muted">Email : </h6>
                                <h6 class="card-subtitle mb-2 text-muted">Phone : </h6>
                                <p class="lead text-gray-800 mb-1">Message</p>
                                <p>"......."</p>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>