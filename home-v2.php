<?php
/**
 * Template Name: Home V2 (RebootIT.cloud)
 * Description: Clean-slate homepage focused on MSP bait & hook. Uses child theme CSS + home-v2.js.
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
            They need a <span class="accent">smarter operating systems</span>.
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

  <!-- 2) PROBLEM / TRUTH -->
  <section id="problem" class="section fade-up" aria-label="Problem">
    <div class="container">
      <div class="stack gap-m center">
        <h2 class="section__title">The gap isn’t effort — it’s <span class="accent">operating model</span>.</h2>
        <p class="section__lede">Most MSPs sell labor disguised as “managed services.” Buyers want clarity, outcomes, and cadence — not tickets, tools, and time.</p>
      </div>
      <div class="grid grid-3 gap-l">
        <article class="reboot-card">
          <h3 class="card__title">Fuzzy offer</h3>
          <p>Bundles read like a parts list. No visible value ladder or next step.</p>
        </article>
        <article class="reboot-card">
          <h3 class="card__title">Random wins</h3>
          <p>Deals close, but handoffs drift. No rhythm to prove strategy or earn the next project.</p>
        </article>
        <article class="reboot-card">
          <h3 class="card__title">Tool sprawl</h3>
          <p>More platforms, more overhead. Margins sag while the team burns out.</p>
        </article>
      </div>
    </div>
  </section>

  <!-- 3) PROMISE / POSITIONING -->
  <section id="promise" class="section section--invert fade-up" aria-label="Promise">
    <div class="container">
      <div class="grid grid-2">
        <div class="stack gap-m">
          <h2 class="section__title">A modern MSP that grows on purpose.</h2>
          <ul class="checklist">
            <li>Outcome-based offer with tiers that ladder value</li>
            <li>Pricing logic that protects margin and signals quality</li>
            <li>Post-win playbook that earns expansion</li>
            <li>Operating cadence your team can actually run</li>
          </ul>
        </div>
        <article class="reboot-card">
          <h3 class="card__title">How it shows up</h3>
          <p>Clear packaging, smart service design, and leadership rhythms that compound. Clients feel the difference in month one.</p>
          <div class="row gap-s">
            <a class="btn btn-primary" href="#framework">Explore the framework</a>
            <a class="btn btn-ghost" href="#resources">Get working templates</a>
          </div>
        </article>
      </div>
    </div>
  </section>

  <!-- 4) FRAMEWORK -->
  <section id="framework" class="section fade-up" aria-label="Framework">
    <div class="container">
      <div class="stack gap-m center">
        <h2 class="section__title">The Reboot Framework — 5 Parts</h2>
        <p class="section__lede">Simple to understand. Strong enough to scale.</p>
      </div>
      <div class="grid grid-5 grid-scroll" role="list">
        <article class="reboot-step" role="listitem">
          <span class="badge" aria-hidden="true">1</span>
          <h3>Model</h3>
          <p>Define tiers, promises, and boundaries. Kill scope creep.</p>
        </article>
        <article class="reboot-step" role="listitem">
          <span class="badge" aria-hidden="true">2</span>
          <h3>Offer</h3>
          <p>Package outcomes, not parts. Clarify the path to “next.”</p>
        </article>
        <article class="reboot-step" role="listitem">
          <span class="badge" aria-hidden="true">3</span>
          <h3>Pricing</h3>
          <p>Align price with risk, complexity, and value — not hours.</p>
        </article>
        <article class="reboot-step" role="listitem">
          <span class="badge" aria-hidden="true">4</span>
          <h3>Plays</h3>
          <p>Post-win cadence: kickoff → 30/60/90 → QBR/Strategy.</p>
        </article>
        <article class="reboot-step" role="listitem">
          <span class="badge" aria-hidden="true">5</span>
          <h3>Operating Rhythm</h3>
          <p>Weekly leadership, metrics, and enablement that stick.</p>
        </article>
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
