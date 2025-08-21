<?php
/**
 * Template Name: Home V2 (RebootIT.cloud)
 * Description: Clean-slate homepage with geometric cloud hero. Uses theme/child CSS.
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }
get_header();
?>

<main id="home-v2" class="homev2" role="main">

<section class="hero-geo hero-min" role="banner">
  <div class="hero-geo__artwrap" aria-hidden="true">
    <svg viewBox="0 0 1440 520" preserveAspectRatio="xMidYMid slice">
      <defs>
        <linearGradient id="gf" x1="0" y1="0" x2="0" y2="1">
          <stop offset="0%" stop-opacity=".12"/><stop offset="100%" stop-opacity=".03"/>
        </linearGradient>
        <style>
          .g line{stroke:url(#gf);stroke-width:1}
          .ring{fill:none;stroke:#3E7BFF;stroke-opacity:.14;stroke-width:1.5;stroke-dasharray:6 10}
          .tri{fill:none;stroke:#8AB4FF;stroke-opacity:.35;stroke-width:1.5}
          .cloud{fill:none;stroke:#2B6FFF;stroke-width:4;stroke-linecap:round;stroke-linejoin:round}
          .pwr-r{fill:none;stroke:#2B6FFF;stroke-width:3;opacity:.5}
          .pwr-s{stroke:#2B6FFF;stroke-width:4;stroke-linecap:round}
        </style>
      </defs>
      <g class="g" opacity=".25">
        <line x1="160" y1="0" x2="160" y2="520"/><line x1="320" y1="0" x2="320" y2="520"/>
        <line x1="480" y1="0" x2="480" y2="520"/><line x1="640" y1="0" x2="640" y2="520"/>
        <line x1="800" y1="0" x2="800" y2="520"/><line x1="960" y1="0" x2="960" y2="520"/>
        <line x1="1120" y1="0" x2="1120" y2="520"/><line x1="1280" y1="0" x2="1280" y2="520"/>
        <line x1="0" y1="120" x2="1440" y2="120"/><line x1="0" y1="240" x2="1440" y2="240"/>
        <line x1="0" y1="360" x2="1440" y2="360"/><line x1="0" y1="480" x2="1440" y2="480"/>
      </g>
      <g>
        <circle cx="1060" cy="140" r="140" class="ring"/>
        <circle cx="1060" cy="140" r="200" class="ring"/>
      </g>
      <g>
        <polygon points="210,110 240,70 270,110" class="tri"/>
        <polygon points="1260,410 1290,365 1320,410" class="tri"/>
      </g>
      <g transform="translate(0,-10)">
        <path class="cloud" d="M460,300 C420,300 390,270 390,235
             C390,205 410,178 442,168
             C462,115 520,80 596,80
             C662,80 720,114 740,162
             C748,160 757,159 768,159
             C828,159 876,205 876,263
             C876,321 828,367 768,367
             L460,367 Z"/>
        <circle cx="650" cy="245" r="52" class="pwr-r"/>
        <line x1="650" y1="198" x2="650" y2="230" class="pwr-s"/>
      </g>
    </svg>
  </div>

  <div class="hero-geo__content container hero-min__content">
    <span class="eyebrow">Modernize, not just migrate</span>
    <h1>MSPs don’t need another tool — they need a smarter playbook.</h1>
    <p class="subhead">Strategy, AI, and cloud aligned to outcomes — with rhythms your team can run.</p>
    <div class="hero-geo__cta">
      <a class="btn btn--primary" href="<?php echo esc_url( home_url('/thesis') ); ?>">Explore the Thesis</a>
      <a class="btn btn--ghost" href="<?php echo esc_url( home_url('/reboot-session') ); ?>">Book a Reboot Session</a>
    </div>
  </div>
</section>


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
