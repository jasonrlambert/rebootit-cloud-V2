<?php
/**
 * Template Name: Home V2 (RebootIT.cloud)
 * Description: Clean-slate homepage focused on MSP bait & hook. Uses child theme CSS + home-v2.js.
 */

if ( ! defined( 'ABSPATH' ) ) { exit; }
get_header();
?>

<main id="home-v2" class="homev2" role="main">

<!-- HERO: Cloud outline with geometric overlays -->
<section class="hero-geo" role="banner">
  <!-- Geometric background art (pure SVG, no images) -->
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
      </defs>

      <!-- Subtle grid -->
      <g class="hero-geo__grid">
        <!-- verticals -->
        <g opacity="0.25">
          <line x1="180" y1="0" x2="180" y2="720" />
          <line x1="360" y1="0" x2="360" y2="720" />
          <line x1="540" y1="0" x2="540" y2="720" />
          <line x1="720" y1="0" x2="720" y2="720" />
          <line x1="900" y1="0" x2="900" y2="720" />
          <line x1="1080" y1="0" x2="1080" y2="720" />
          <line x1="1260" y1="0" x2="1260" y2="720" />
        </g>
        <!-- horizontals -->
        <g opacity="0.25">
          <line x1="0" y1="120" x2="1440" y2="120" />
          <line x1="0" y1="240" x2="1440" y2="240" />
          <line x1="0" y1="360" x2="1440" y2="360" />
          <line x1="0" y1="480" x2="1440" y2="480" />
          <line x1="0" y1="600" x2="1440" y2="600" />
        </g>
      </g>

      <!-- Concentric dashed rings (movement) -->
      <g class="hero-geo__rings">
        <circle cx="980" cy="240" r="180" class="ring"/>
        <circle cx="980" cy="240" r="260" class="ring"/>
      </g>

      <!-- Floating triangles / nodes -->
      <g class="hero-geo__shapes">
        <polygon points="220,160 255,120 290,160" class="tri tri--1"/>
        <polygon points="1260,520 1295,470 1330,520" class="tri tri--2"/>
        <circle cx="360" cy="520" r="5" class="node"/>
        <circle cx="1140" cy="160" r="5" class="node"/>
        <circle cx="780" cy="580" r="5" class="node"/>
      </g>

      <!-- CLOUD OUTLINE + subtle power icon -->
      <g class="hero-geo__cloud" filter="url(#softGlow)">
        <!-- Cloud outline (animated stroke) -->
        <path class="cloud-path"
          d="M480,430
             C430,430 390,390 390,340
             C390,300 415,265 452,252
             C470,180 540,130 630,130
             C710,130 780,175 805,235
             C815,233 826,232 838,232
             C913,232 973,290 973,362
             C973,435 913,493 838,493
             L480,493
             C480,493 480,430 480,430 Z" />

        <!-- Power icon inside cloud -->
        <g class="power" transform="translate(0,12)">
          <circle cx="700" cy="330" r="68" class="power-ring"/>
          <line x1="700" y1="260" x2="700" y2="316" class="power-stem"/>
        </g>
      </g>
    </svg>
  </div>

  <!-- Text/CTA -->
  <div class="hero-geo__content container">
    <span class="eyebrow">Modernize, don’t just migrate</span>
    <h1>MSPs don’t need another tool — they need a smarter playbook.</h1>
    <p class="subhead">RebootIT.cloud helps MSPs align strategy, AI, and cloud to business outcomes — with frameworks that scale.</p>
    <div class="hero-geo__cta">
      <a class="btn btn--primary" href="/thesis">Explore the Thesis</a>
      <a class="btn btn--ghost" href="/reboot-session">Book a Reboot Session</a>
    </div>
  </div>
</section>


  <!-- 5) PROOF / SOCIAL -->
  <section id="proof" class="section fade-up" aria-label="Proof">
    <div class="container">
      <div class="grid grid-3">
        <article class="reboot-card quote">
          <p class="quote__text">“We stopped selling tickets and started selling outcomes. Churn dropped fast.”</p>
          <p class="quote__meta">— COO, 35-seat MSP</p>
        </article>
        <article class="reboot-card quote">
          <p class="quote__text">“Pricing finally matches effort and risk. Clients respect the clarity.”</p>
          <p class="quote__meta">— Founder, 18-seat MSP</p>
        </article>
        <article class="reboot-card quote">
          <p class="quote__text">“The post-win plays alone paid for the engagement in 60 days.”</p>
          <p class="quote__meta">— GM, 50-seat MSP</p>
        </article>
      </div>
    </div>
  </section>

  <!-- 6) RESOURCES (Gated + Ungated) -->
  <section id="resources" class="section section--tint fade-up" aria-label="Resources">
    <div class="container">
      <div class="stack gap-m center">
        <h2 class="section__title">Steal the playbooks (then make them yours)</h2>
        <p class="section__lede">Checklists, offer templates, and post-win cadences to ship this faster.</p>
      </div>
      <div class="grid grid-3">
        <a class="reboot-card linkcard" href="<?php echo esc_url( home_url( '/resources-unlock' ) ); ?>">
          <h3 class="card__title">MSP Modernization Checklist</h3>
          <p>10 steps to move from reactive to strategic. Printable.</p>
          <span class="linkarrow" aria-hidden="true">→</span>
        </a>
        <a class="reboot-card linkcard" href="<?php echo esc_url( home_url( '/resources-unlock' ) ); ?>">
          <h3 class="card__title">Offer &amp; Pricing Builder</h3>
          <p>Tier logic, guardrails, and margin math for real life.</p>
          <span class="linkarrow" aria-hidden="true">→</span>
        </a>
        <a class="reboot-card linkcard" href="<?php echo esc_url( home_url( '/resources-unlock' ) ); ?>">
          <h3 class="card__title">Post-Win Playbook</h3>
          <p>Kickoff → 30/60/90 → QBR rhythm that earns expansion.</p>
          <span class="linkarrow" aria-hidden="true">→</span>
        </a>
      </div>
    </div>
  </section>

  <!-- 7) PRIMARY CTA -->
  <section id="cta" class="section section--invert fade-up" aria-label="Primary Call to Action">
    <div class="container center">
      <h2 class="section__title">Let’s reboot. Let’s refresh. Let’s get to what’s next.</h2>
      <p class="section__lede">Book a free working session. Bring a messy offer, a noisy client, or a pricing headache — leave with next steps.</p>
      <div class="row gap-m center">
        <a class="btn btn-primary" href="<?php echo esc_url( home_url( '/reboot-session' ) ); ?>">Book a Free Reboot Session</a>
        <a class="btn btn-ghost" href="<?php echo esc_url( home_url( '/contact' ) ); ?>">Contact</a>
      </div>
    </div>
  </section>

  <!-- 8) FAQ -->
  <section id="faq" class="section fade-up" aria-label="FAQ">
    <div class="container">
      <div class="grid grid-2">
        <details class="reboot-qa">
          <summary>Is this coaching, consulting, or “done with you”?</summary>
          <div class="answer">Engagements are hands-on and collaborative. Expect clear artifacts you can run with.</div>
        </details>
        <details class="reboot-qa">
          <summary>Will this fight our current tool set?</summary>
          <div class="answer">No. The framework is tool-agnostic. Keep what works; remove what drags.</div>
        </details>
        <details class="reboot-qa">
          <summary>How fast to first visible win?</summary>
          <div class="answer">Most teams ship a sharpened offer or a post-win cadence in 2–4 weeks.</div>
        </details>
        <details class="reboot-qa">
          <summary>What if we’re early-stage?</summary>
          <div class="answer">Start with the offer and post-win plays. Maturity follows momentum.</div>
        </details>
      </div>
    </div>
  </section>

</main>

<?php get_footer();
