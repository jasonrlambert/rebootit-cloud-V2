<?php
/**
 * Template Name: Home V2 (RebootIT.cloud)
 * Description: Clean-slate homepage with geometric cloud hero. Uses theme/child CSS.
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }
get_header();
?>

<main id="home-v2" class="homev2" role="main">

<!-- 1) HERO — Bait & Hook -->
<section id="hero" class="section hero fade-up" aria-label="Hero">
  <div class="container">
    <div class="grid grid-2">
      <div class="stack gap-l">
        <h1 class="hero__title">
          MSPs don’t need more tools.<br>
          They need a <span class="accent">smarter operating system</span>.
        </h1>
        <p class="hero__subtitle">
          RebootIT.cloud helps MSPs scale recurring revenue, reduce chaos, and signal strategic value — without adding headcount.
        </p>
        <div class="row gap-m">
          <a class="btn btn-primary" href="<?php echo esc_url( home_url( '/reboot-session' ) ); ?>">Book a Free Reboot Session</a>
          <a class="btn btn-ghost" href="#framework">See the 5-part framework</a>
        </div>
        <ul class="hero__bullets">
          <li>Less firefighting, more forward motion</li>
          <li>Offer design clients actually understand</li>
          <li>Post-win plays that earn expansion</li>
        </ul>
      </div>

      <div class="hero__cardwrap" aria-hidden="false">
        <article class="reboot-card kpi" aria-label="Signals That Matter">
          <header class="kpi__head">Signals That Matter</header>
          <div class="kpi__row" role="list">
            <div class="kpi__item" role="listitem">
              <span class="kpi__value">+27%</span>
              <span class="kpi__label">MRR / seat</span>
            </div>
            <div class="kpi__item" role="listitem">
              <span class="kpi__value">-31%</span>
              <span class="kpi__label">Ticket noise</span>
            </div>
            <div class="kpi__item" role="listitem">
              <span class="kpi__value">2.4×</span>
              <span class="kpi__label">Project attach</span>
            </div>
          </div>
          <footer class="kpi__foot">Outcomes from modernized offer + post-win cadence.</footer>
        </article>
      </div>
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
