<?php
declare(strict_types=1);
session_start();
if (empty($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="theme-color" content="#172b27">
  <meta name="description" content="Seasonal plates, wood-fired favorites, and a table saved just for you at Juniper & Ember.">
  <title>Juniper &amp; Ember | Seasonal Dining</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/style.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark site-nav sticky-top">
  <div class="container">
    <a class="navbar-brand" href="#home"><span class="brand-name">Juniper <span>&amp;</span> Ember</span><span class="brand-tagline">SEASONAL KITCHEN</span></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav" aria-controls="mainNav" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
    <div class="collapse navbar-collapse" id="mainNav">
      <ul class="navbar-nav ms-auto align-items-lg-center gap-lg-3">
        <li class="nav-item"><a class="nav-link" href="#menu">Menu</a></li>
        <li class="nav-item"><a class="nav-link" href="#story">About As</a></li>
        <li class="nav-item"><a class="nav-link" href="#visit">Visit</a></li>
        <li class="nav-item"><a class="btn btn-nav-book" href="#reservation">Reserve a table</a></li>
      </ul>
    </div>
  </div>
</nav>
<header class="hero" id="home">
  <div class="container hero-layout">
    <div class="hero-copy">
      <p class="eyebrow">WOOD-FIRED · SEASONAL · LOCAL</p>
      <h1 class="display-4 fw-bold">Gather around something good.</h1>
      <p class="lead">A neighborhood kitchen for slow evenings, bright flavors, and one more plate for the table.</p>
      <div class="hero-actions"><a href="#menu" class="btn btn-light btn-lg">Explore the menu</a><a href="#reservation" class="btn btn-outline-light btn-lg hero-text-link">Save your seat <span aria-hidden="true">↗</span></a></div>
      <p class="hero-hours">DINNER TUESDAY–SUNDAY <span>·</span> 5 PM–10 PM</p>
    </div>
    <figure class="hero-photo mb-0">
      <img src="https://images.unsplash.com/photo-1473093295043-cdd812d0e601?auto=format&fit=crop&w=1400&q=85" alt="Fresh pasta with tomatoes and herbs, ready to share">
      <figcaption><span>A LITTLE FIRE, A LOT OF HEART</span><strong>Made for lingering.</strong></figcaption>
    </figure>
  </div>
</header>
<main>
  <section id="menu" class="container menu-section py-5">
    <div class="d-flex justify-content-between align-items-end mb-3 flex-wrap gap-2">
      <div><p class="eyebrow mb-1">A TASTE OF THE SEASON</p><h2 class="section-title">A few house favorites</h2></div>
      <span class="text-secondary menu-note">Sample menu · Seasonal changes welcome</span>
    </div>
    <div class="row g-3">
      <div class="col-md-4"><article class="dish-card h-100"><img class="dish-image" src="https://images.unsplash.com/photo-1473093295043-cdd812d0e601?auto=format&fit=crop&w=900&q=85" alt="Fresh pasta tossed with tomatoes and herbs"><div class="dish-copy"><h3 class="h5">Creamy Tuscan Pasta</h3><p class="text-secondary mb-0">Pasta, spinach, parmesan and a creamy garlic sauce.</p><div class="dish-meta"><span class="dish-rating" role="img" aria-label="Rated 4.8 out of 5"><span aria-hidden="true">★★★★★</span><span>4.8</span></span><strong class="dish-price">$18.50</strong></div></div></article></div>
      <div class="col-md-4"><article class="dish-card h-100"><img class="dish-image" src="https://images.unsplash.com/photo-1512621776951-a57141f2eefd?auto=format&fit=crop&w=900&q=85" alt="Colorful garden salad with fresh greens and vegetables"><div class="dish-copy"><h3 class="h5">Garden Bowl</h3><p class="text-secondary mb-0">Seasonal greens, roasted vegetables and lemon dressing.</p><div class="dish-meta"><span class="dish-rating" role="img" aria-label="Rated 4.7 out of 5"><span aria-hidden="true">★★★★★</span><span>4.7</span></span><strong class="dish-price">$14.00</strong></div></div></article></div>
      <div class="col-md-4"><article class="dish-card h-100"><img class="dish-image" src="https://images.unsplash.com/photo-1533134242443-d4fd215305ad?auto=format&fit=crop&w=900&q=85" alt="Cheesecake served with fresh berries"><div class="dish-copy"><h3 class="h5">Classic Cheesecake</h3><p class="text-secondary mb-0">Creamy baked cheesecake with a berry topping.</p><div class="dish-meta"><span class="dish-rating" role="img" aria-label="Rated 4.9 out of 5"><span aria-hidden="true">★★★★★</span><span>4.9</span></span><strong class="dish-price">$9.00</strong></div></div></article></div>
      <div class="col-md-4"><article class="dish-card h-100"><img class="dish-image" src="https://images.unsplash.com/photo-1513104890138-7c749659a591?auto=format&fit=crop&w=900&q=85" alt="Freshly baked pizza topped with tomato, cheese, and basil"><div class="dish-copy"><h3 class="h5">Wood-Fired Margherita</h3><p class="text-secondary mb-0">Charred sourdough crust, tomato, mozzarella and basil.</p><div class="dish-meta"><span class="dish-rating" role="img" aria-label="Rated 4.8 out of 5"><span aria-hidden="true">★★★★★</span><span>4.8</span></span><strong class="dish-price">$17.00</strong></div></div></article></div>
      <div class="col-md-4"><article class="dish-card h-100"><img class="dish-image" src="https://images.unsplash.com/photo-1467003909585-2f8a72700288?auto=format&fit=crop&w=900&q=85" alt="Seared salmon served with fresh greens"><div class="dish-copy"><h3 class="h5">Herb-Crusted Salmon</h3><p class="text-secondary mb-0">Pan-seared salmon with garden herbs and seasonal greens.</p><div class="dish-meta"><span class="dish-rating" role="img" aria-label="Rated 4.9 out of 5"><span aria-hidden="true">★★★★★</span><span>4.9</span></span><strong class="dish-price">$24.00</strong></div></div></article></div>
      <div class="col-md-4"><article class="dish-card h-100"><img class="dish-image" src="https://images.unsplash.com/photo-1606313564200-e75d5e30476c?auto=format&fit=crop&w=900&q=85" alt="Rich chocolate cake served as a dessert"><div class="dish-copy"><h3 class="h5">Chocolate Fondant</h3><p class="text-secondary mb-0">Warm dark chocolate cake with a soft center.</p><div class="dish-meta"><span class="dish-rating" role="img" aria-label="Rated 4.8 out of 5"><span aria-hidden="true">★★★★★</span><span>4.8</span></span><strong class="dish-price">$10.00</strong></div></div></article></div>
      <div class="col-md-4"><article class="dish-card h-100"><img class="dish-image" src="https://images.unsplash.com/photo-1476124369491-e7addf5db371?auto=format&fit=crop&w=900&q=85" alt="Creamy mushroom risotto finished with fresh herbs"><div class="dish-copy"><h3 class="h5">Wild Mushroom Risotto</h3><p class="text-secondary mb-0">Slow-stirred arborio rice, wild mushrooms and parmesan.</p><div class="dish-meta"><span class="dish-rating" role="img" aria-label="Rated 4.8 out of 5"><span aria-hidden="true">★★★★★</span><span>4.8</span></span><strong class="dish-price">$21.50</strong></div></div></article></div>
      <div class="col-md-4"><article class="dish-card h-100"><img class="dish-image" src="https://images.unsplash.com/photo-1547592180-85f173990554?auto=format&fit=crop&w=900&q=85" alt="Fresh seasonal salad with colorful vegetables"><div class="dish-copy"><h3 class="h5">Burrata &amp; Heirloom Tomato</h3><p class="text-secondary mb-0">Creamy burrata, ripe tomatoes, basil and toasted sourdough.</p><div class="dish-meta"><span class="dish-rating" role="img" aria-label="Rated 4.7 out of 5"><span aria-hidden="true">★★★★★</span><span>4.7</span></span><strong class="dish-price">$16.00</strong></div></div></article></div>
      <div class="col-md-4"><article class="dish-card h-100"><img class="dish-image" src="https://images.unsplash.com/photo-1578985545062-69928b1d9587?auto=format&fit=crop&w=900&q=85" alt="Slice of layered cake served for dessert"><div class="dish-copy"><h3 class="h5">Lemon Olive Oil Cake</h3><p class="text-secondary mb-0">Tender citrus cake with whipped mascarpone and berries.</p><div class="dish-meta"><span class="dish-rating" role="img" aria-label="Rated 4.9 out of 5"><span aria-hidden="true">★★★★★</span><span>4.9</span></span><strong class="dish-price">$9.50</strong></div></div></article></div>
    </div>
  </section>
  <section id="story" class="story-section">
    <div class="container story-layout">
      <figure class="story-photo mb-0"><img src="https://images.unsplash.com/photo-1414235077428-338989a2e8c0?auto=format&fit=crop&w=1200&q=85" alt="A warmly lit restaurant table set for dinner"></figure>
      <div class="story-copy"><p class="eyebrow mb-2">ROOTED IN GOOD FOOD</p><h2 class="section-title">A neighborhood table, with a little spark.</h2><p>We believe the best nights start with honest ingredients, a hot oven, and nowhere else you need to be. Our kitchen follows the seasons and makes room for the familiar, the curious, and the extra-sauce people.</p><a class="story-link" href="#reservation">Come spend an evening with us <span aria-hidden="true">→</span></a></div>
    </div>
  </section>
  <section id="reservation" class="reservation-panel container p-4 p-md-5">
    <p class="eyebrow mb-1">MAKE IT A DATE</p><h2 class="section-title mb-4">Your table is waiting.</h2>
    <form action="book.php" method="post" class="row g-3">
      <input type="hidden" name="csrf_token" value="<?= htmlspecialchars($_SESSION['csrf_token'], ENT_QUOTES, 'UTF-8') ?>">
      <div class="col-md-6"><label for="name" class="form-label">Full name</label><input class="form-control" id="name" name="name" maxlength="100" required autocomplete="name"></div>
      <div class="col-md-6"><label for="email" class="form-label">Email address</label><input class="form-control" id="email" type="email" name="email" maxlength="254" required autocomplete="email"></div>
      <div class="col-md-4"><label for="phone" class="form-label">Phone (optional)</label><input class="form-control" id="phone" name="phone" maxlength="30" autocomplete="tel"></div>
      <div class="col-md-4"><label for="date" class="form-label">Date</label><input class="form-control" id="date" type="date" name="reservation_date" min="<?= date('Y-m-d') ?>" required></div>
      <div class="col-md-4"><label for="time" class="form-label">Time</label><input class="form-control" id="time" type="time" name="reservation_time" min="11:00" max="22:00" required></div>
      <div class="col-md-4"><label for="guests" class="form-label">Guests</label><select class="form-select" id="guests" name="guests" required><option value="">Choose...</option><?php for ($i=1;$i<=10;$i++): ?><option value="<?= $i ?>"><?= $i ?> <?= $i===1?'guest':'guests' ?></option><?php endfor; ?></select></div>
      <div class="col-12"><label for="notes" class="form-label">Special requests (optional)</label><textarea class="form-control" id="notes" name="notes" rows="3" maxlength="500"></textarea></div>
      <div class="col-12"><button class="btn btn-primary btn-lg" type="submit">Submit reservation</button><p class="small text-secondary mt-2 mb-0">Demo project: submitting stores a reservation in the local database; it does not contact a real restaurant.</p></div>
    </form>
  </section>
  <section id="visit" class="visit-section">
    <div class="container visit-layout">
      <div><p class="eyebrow mb-2">COME ON IN</p><h2 class="section-title">Good things happen around a table.</h2><p class="visit-copy">Join us for dinner, bring your favorite people, and let the kitchen take it from here.</p></div>
      <div class="visit-hours"><h3>Kitchen hours</h3><p><span>Tuesday–Sunday</span><strong>5:00 PM–10:00 PM</strong></p><p><span>Monday</span><strong>Closed</strong></p><small>Sample hours for this restaurant demo.</small><a href="#reservation" class="btn btn-light mt-3">Plan your visit</a></div>
    </div>
  </section>
</main>
<footer class="site-footer"><div class="container footer-layout"><a class="footer-brand" href="#home">Juniper <span>&amp;</span> Ember</a><span>Seasonal plates. Good company. Always room for one more.</span><a href="#reservation">Reservations <span aria-hidden="true">↑</span></a><small>Restaurant Sample menu and details</small></div></footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body></html>
