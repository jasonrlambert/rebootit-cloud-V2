<?php
/**
 * Template Name: Home V2 (RebootIT.cloud)
 * Description: Clean-slate homepage with geometric cloud hero. Uses theme/child CSS.
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }
get_header();
?>

<main id="home-v2" class="homev2" role="main">

  <!-- HERO — Cloud Outline + Geometric Overlays -->
  <section class="hero-geo" role="banner">
    <!-- Background art (self-styled SVG so it never renders solid black) -->
    <div class="hero-geo__artwrap" aria-hidden="true">
      <svg class="hero-geo__art" viewBox="0 0 1440 720" preserveAspectRatio="xMidYMid slice">
        <defs>
          <linearGradient id="gridFade" x1="0" y1="0" x2="0" y2="1">
            <stop offset="0%" stop-opacity="0.18"/>
            <stop offset="100%" stop-opacity="0.04"/>
          </linearGradient>
          <filter id="softGlow" x="-50%" y="-50%" width="200%" height="200%">
            <feGaussianBlur stdDeviation="6" result="blur"/>
            <feMerge>
              <feMergeNode in="blur"/>
              <feMergeNode in="SourceGraphic"/>
            </feMerge>
          </filter>
          <style>
            .grid line{stroke:url(#gridFade);stroke-width:1}
            .ring{fill:none;stroke:#2B6FFF;stroke-opacity:.18;stroke-width:2;stroke-dasharray:8 10}
            .tri{fill:none;stroke:#69A1FF;stroke-opacity:.35;stroke-width:2}
            .node{fill:#2B6FFF;opacity:.55}
            .cloud-path{fill:none;stroke:#2B6FFF;stroke-width:6;stroke-linecap:round;stroke-linejoin:round}
            .power-ring{fill:none;stroke:#2B6FFF;stroke-width:4;opacity:.55}
            .power-stem{stroke:#2B6FFF;stroke-width:6;stroke-linecap:round}
          </style>
        </defs>

        <!-- Grid -->
        <g class="grid">
          <g opacity="0.25">
            <line x1="180" y1="0" x2="180" y2="720" />
            <line x1="360" y1="0" x2="360" y2="720" />
            <line x1="540" y1="0" x2="540" y2="720" />
            <line x1="720" y1="0" x2="720" y2="720" />
            <line x1="900" y1="0" x2="900" y2="720" />
            <line x1="1080" y1="0" x2="1080" y2="720" />
            <line x1="1260" y1="0" x2="1260" y2="720" />
          </g>
          <g opacity="0.25">
            <line x1="0" y1="120" x2="1440" y2="120" />
            <line x1="0" y1="240" x2="1440" y2="240" />
            <line x1="0" y1="360" x2="1440" y2="360" />
            <line x1="0" y1="480" x2="1440" y2="480" />
            <line x1="0" y1="600" x2="1440" y2="600" />
          </g>
        </g>

        <!-- Rings -->
        <g>
          <circle cx="980" cy="240" r="180" class="ring"/>
          <circle cx="980" cy="240" r="260" class="ring"/>
        </g>

        <!-- Triangles + Nodes -->
        <g>
          <polygon points="220,160 255,120 290,160" class="tri"/>
          <polygon points="1260,520 1295,470 1330,520" class="tri"/>
          <circle cx="360" cy="520" r="5" class="node"/>
          <circle cx="1140" cy="160" r="5" class="node"/>
          <circle cx="780" cy="580" r="5" class="node"/>
        </g>

        <!-- Cloud outline + power icon -->
        <g filter="url(#softGlow)">
          <path class="cloud-path" d="M480,430
             C430,430 390,390 390,340
             C390,300 415,265 452,252
             C470,180 540,130 630,130
             C710,130 780,175 805,235
             C815,233 826,232 838,232
             C913,232 973,290 973,362
             C973,435 913,493 838,493
             L480,493
             C480,493 480,430 480,430 Z" />
          <g transform="translate(0,12)">
            <circle cx="700" cy="330" r="68" class="power-ring"/>
            <line x1="700" y1="260" x2="700" y2="316" class="power-stem"/>
          </g>
        </g>
      </svg>
    </div>

    <!-- Hero text/CTA -->
    <div class="hero-geo__content container">
      <span class="eyebrow">Modernize, not just migrate</span>
      <h1><?php echo esc_html__( "MSPs don’t need another tool — they need a smarter playbook.", 'rebootit' ); ?></h1>
      <p class="subhead"><?php echo esc_html__( 'Align strategy, AI, and cloud to outcomes — with rhythms your team can actually run.', 'rebootit' ); ?></p>
      <div class="hero-geo__cta">
        <a class="btn btn--primary" href="<?php echo esc_url( home_url( '/thesis' ) ); ?>"><?php echo esc_html__( 'Explore the Thesis', 'rebootit' ); ?></a>
        <a class="btn btn--ghost" href="<?php echo esc_url( home_url( '/reboot-session' ) ); ?>"><?php echo esc_html__( 'Book a Reboot Session', 'rebootit' ); ?></a>
      </div>
    </div>
  </section>

  <!-- PROOF / SOCIAL -->
  <section id="proof" class="section fade-up" aria-label="<?php echo esc_attr__( 'Proof', 'rebootit' ); ?>">
    <div class="container">
      <div class="grid grid-3">
        <article class="reboot-card quote">
          <p class="quote__text">“<?php echo esc_html__( 'We stopped selling tickets and started selling outcomes. Churn dropped fast.', 'rebootit' ); ?>”</p>
          <p class="quote__meta">— <?php echo esc_html__( 'COO, 35-seat MSP', 'rebootit' ); ?></p>
        </article>
        <article class="reboot-card quote">
          <p class="quote__text">“<?php echo esc_html__( 'Pricing finally matches effort and risk. Clients respect the clarity.', 'rebootit' ); ?>”</p>
          <p class="quote__meta">— <?php echo esc_html__( 'Founder, 18-seat MSP', 'rebootit' ); ?></p>
        </article>
        <article class="reboot-card quote">
          <p class="quote__text">“<?php echo esc_html__( 'The post-win plays alone paid for the engagement in 60 days.', 'rebootit' ); ?>”</p>
          <p class="quote__meta">— <?php echo esc_html__( 'GM, 50-seat MSP', 'rebootit' ); ?></p>
        </article>
      </div>
    </div>
  </section>

  <!-- RESOURCES -->
  <section id="resources" class="section section--tint fade-up" aria-label="<?php echo esc_attr__( 'Resources', 'rebootit' ); ?>">
    <div class="container">
      <div class="stack gap-m center">
        <h2 class="section__title"><?php echo esc_html__( 'Steal the playbooks (then make them yours)', 'rebootit' ); ?></h2>
        <p class="section__lede"><?php echo esc_html__( 'Checklists, offer templates, and post-win cadences to ship this faster.', 'rebootit' ); ?></p>
      </div>
      <div class="grid grid-3">
        <a class="reboot-card linkcard" href="<?php echo esc_url( home_url( '/resources-unlock' ) ); ?>">
          <h3 class="card__title"><?php echo esc_html__( 'MSP Modernization Checklist', 'rebootit' ); ?></h3>
          <p><?php echo esc_html__( '10 steps to move from reactive to strategic. Printable.', 'rebootit' ); ?></p>
          <span class="linkarrow" aria-hidden="true">→</span>
        </a>
        <a class="reboot-card linkcard" href="<?php echo esc_url( home_url( '/resources-unlock' ) ); ?>">
          <h3 class="card__title"><?php echo esc_html__( 'Offer & Pricing Builder', 'rebootit' ); ?></h3>
          <p><?php echo esc_html__( 'Tier logic, guardrails, and margin math for real life.', 'rebootit' ); ?></p>
          <span class="linkarrow" aria-hidden="true">→</span>
        </a>
        <a class="reboot-card linkcard" href="<?php echo esc_url( home_url( '/resources-unlock' ) ); ?>">
          <h3 class="card__title"><?php echo esc_html__( 'Post-Win Playbook', 'rebootit' ); ?></h3>
          <p><?php echo esc_html__( 'Kickoff → 30/60/90 → QBR rhythm that earns expansion.', 'rebootit' ); ?></p>
          <span class="linkarrow" aria-hidden="true">→</span>
        </a>
      </div>
    </div>
  </section>

  <!-- PRIMARY CTA -->
  <section id="cta" class="section section--invert fade-up" aria-label="<?php echo esc_attr__( 'Primary Call to Action', 'rebootit' ); ?>">
    <div class="container center">
      <h2 class="section__title"><?php echo esc_html__( 'Let’s reboot. Let’s refresh. Let’s get to what’s next.', 'rebootit' ); ?></h2>
      <p class="section__lede">
        <?php echo esc_html__( 'Book a free working session. Bring a messy offer, a noisy client, or a pricing headache — leave with next steps.', 'rebootit' ); ?>
      </p>
      <div class="row gap-m center">
        <a class="btn btn-primary" href="<?php echo esc_url( home_url( '/reboot-session' ) ); ?>"><?php echo esc_html__( 'Book a Free Reboot Session', 'rebootit' ); ?></a>
        <a class="btn btn-ghost" href="<?php echo esc_url( home_url( '/contact' ) ); ?>"><?php echo esc_html__( 'Contact', 'rebootit' ); ?></a>
      </div>
    </div>
  </section>

  <!-- FAQ -->
  <section id="faq" class="section fade-up" aria-label="<?php echo esc_attr__( 'FAQ', 'rebootit' ); ?>">
    <div class="container">
      <div class="grid grid-2">
        <details class="reboot-qa">
          <summary><?php echo esc_html__( 'Is this coaching, consulting, or “done with you”?', 'rebootit' ); ?></summary>
          <div class="answer"><?php echo esc_html__( 'Engagements are hands-on and collaborative. Expect clear artifacts you can run with.', 'rebootit' ); ?></div>
        </details>
        <details class="reboot-qa">
          <summary><?php echo esc_html__( 'Will this fight our current tool set?', 'rebootit' ); ?></summary>
          <div class="answer"><?php echo esc_html__( 'No. The framework is tool-agnostic. Keep what works; remove what drags.', 'rebootit' ); ?></div>
        </details>
        <details class="reboot-qa">
          <summary><?php echo esc_html__( 'How fast to first visible win?', 'rebootit' ); ?></summary>
          <div class="answer"><?php echo esc_html__( 'Most teams ship a sharpened offer or a post-win cadence in 2–4 weeks.', 'rebootit' ); ?></div>
        </details>
        <details class="reboot-qa">
          <summary><?php echo esc_html__( 'What if we’re early-stage?', 'rebootit' ); ?></summary>
          <div class="answer"><?php echo esc_html__( 'Start with the offer and post-win plays. Maturity follows momentum.', 'rebootit' ); ?></div>
        </details>
      </div>
    </div>
  </section>

</main>

<?php get_footer();
