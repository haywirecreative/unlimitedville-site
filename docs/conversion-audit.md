# Unlimitedville.com -- Mobile Conversion Audit
**Date:** March 27, 2026
**Viewport Tested:** 390x844 (iPhone 14/15 equivalent)

---

## Executive Summary

Unlimitedville has solid fundamentals -- a clear value prop, strong social proof, and a risk-reducing 21-day trial offer. But several UX friction points, trust gaps, and mobile-specific issues are likely causing visitors to bounce before converting. The biggest conversion killers are: a confusing "membership fee" pricing structure that creates sticker shock, a lack of coverage verification before purchase, and a homepage that buries key decision-making info behind too many scroll-lengths.

---

## 1. CRITICAL: Pricing Creates Confusion and Sticker Shock

**The Problem:**
Each plan shows two costs -- a monthly fee ($69/$99/$109) AND a "Membership Fee" ($299, discounted to $0/$99/$199). This is the single biggest conversion barrier on the site.

- The hero says "From $69/mo" but users discover they also owe $99-$199 upfront on the two higher plans
- The crossed-out "$299" membership fee with discount badges ("100% Off", "67% Off", "33% Off") feels like a pressure tactic, not a deal
- Users cannot easily calculate total first-month cost at a glance
- There is no explanation of what the "Membership Fee" covers or why it exists

**Why it kills conversions:**
Visitors arriving from ads or search expect $69/mo. When they see an additional upfront fee, it triggers loss aversion and distrust -- especially for a service they have never tried.

**Recommendations:**
- Show total first-month cost prominently (e.g., "First month: $69, then $69/mo" for 4G Lite)
- Explain what the membership fee covers in 1 sentence (device deposit? setup?)
- Consider absorbing it into monthly pricing or spreading it across first 3 months
- If keeping the fee, rename it from "Membership Fee" to something value-oriented like "Router + Setup Kit" so people know what they are paying for

---

## 2. CRITICAL: No Coverage Check Before Purchase

**The Problem:**
This is a cellular-based internet service. Performance depends entirely on tower proximity and signal strength. Yet there is zero way for a visitor to check whether the service will work at their address before committing.

**Why it kills conversions:**
The target audience (rural users) has been burned before by services that don't work at their location. Asking them to pay $69-$308 upfront without any coverage verification requires a massive leap of faith. The 21-day trial helps, but most people would rather know BEFORE they order.

**Recommendations:**
- Add an address/ZIP lookup tool above the plan cards ("Check coverage at your address")
- Even a simple carrier coverage map overlay would reduce friction enormously
- At minimum, add a prominent note like "Not sure which network is strongest in your area? Call us and we'll help you choose" with the phone number right there

---

## 3. HIGH: Homepage is Too Long and Buries the Funnel

**The Problem:**
The homepage scrolls through approximately 8-10 full viewport heights of content before hitting the footer. The flow is:

1. Hero with CTAs (good)
2. "As Seen On" logos
3. Welcome text + YouTube video
4. Use case images (Gaming / Streaming / Meetings)
5. How It Works (3-step explanation)
6. 21-Day Guarantee CTA
7. Testimonials (video carousel + 6 written reviews)
8. Photo gallery
9. "Who We Are" section
10. "Join the Community" CTA
11. FAQ section
12. Footer

That is far too much content between the first CTA and the final CTA. Mobile users lose patience fast.

**Recommendations:**
- Cut the homepage to 4-5 sections max: Hero > How It Works > Plans Overview > Social Proof > Final CTA
- Move the "Who We Are" and lifestyle photo gallery to an About page
- The FAQ section on the homepage duplicates the Support page -- remove it from the homepage or keep only 3 questions
- Add a sticky bottom CTA bar on mobile ("View Plans" or "Start Free Trial")

---

## 4. HIGH: "Membership" Language Creates the Wrong Mental Model

**The Problem:**
The entire site frames this as a "membership organization" rather than an internet service. Nav says "Membership Plans." The about section explains they are "a membership organization" that lets you "use our cellular routers and hotspots for as long as you are a member."

**Why it kills conversions:**
People searching for "rural internet" or "wireless home internet" expect to buy an internet plan, not join a membership. The membership framing:
- Sounds more expensive and committal than "plan" or "service"
- Creates ambiguity about whether you own the hardware
- Triggers skepticism ("is this an MLM?" or "is this a subscription trap?")

**Recommendations:**
- Reframe from "Membership" to "Plans" or "Service" across the site
- Make it crystal clear: "We ship you a router. Plug it in. You have internet. Cancel anytime."
- If the membership model has legal/business reasons, explain the value ("As a member, you get..." ) rather than just stating the structure

---

## 5. HIGH: Mobile Navigation Issues

**The Problem:**
When tested at mobile width (390px), the site rendered what appeared to be a desktop layout squeezed down rather than a true mobile-responsive experience. Key issues:

- The top nav shows "MEMBERSHIP PLANS / REVIEWS / [LOGO] / SUPPORT & FAQS / ORDER 888.422.2907" all in a horizontal bar that gets very cramped
- No visible hamburger menu behavior at narrow widths
- The plan cards on the /plans page display side-by-side in a 3-column layout that requires horizontal scrolling or renders very small on mobile
- The "Call to Order" and "Order Online" buttons in the hero sit side-by-side rather than stacking vertically

**Recommendations:**
- Implement a proper mobile hamburger nav that collapses at < 768px
- Stack plan cards vertically on mobile (1 card per row)
- Stack the hero CTAs vertically with "Order Online" (primary) above "Call to Order" (secondary)
- Make the phone number in the nav tappable and prominent on mobile

---

## 6. MODERATE: Trust Signals Are Present but Poorly Positioned

**The Problem:**
Unlimitedville actually has strong trust signals -- Forbes/Business Insider mentions, 213+ reviews at 4.5 stars, 21-day guarantee, and video testimonials. But they are scattered throughout a very long page.

**Recommendations:**
- Move the star rating + review count to directly beneath the hero headline
- Add the "As Seen On" logos to the /plans page, not just the homepage
- Put "21-Day Money-Back Guarantee" and "No Contracts" badges directly on each plan card, not in a separate section below
- Add a trust badge near each "Start 21-Day Trial" button (e.g., small lock icon + "Risk-free, cancel anytime")

---

## 7. MODERATE: The "Start 21-Day Trial" Button is Misleading

**The Problem:**
The CTA says "Start 21-Day Trial" but clicking it is a form POST (not a link to a trial signup page). Users likely expect a trial means free or very low cost. But the 4G Plus plan requires $99/mo + $99 membership fee = $198 upfront to "start a trial."

**Why it kills conversions:**
There is a gap between what "trial" implies (low risk, maybe free) and what the user is about to pay ($69-$308 depending on plan). This mismatch creates checkout abandonment.

**Recommendations:**
- Change button text to be more transparent: "Order Now -- 21-Day Guarantee" or "Get Started -- Money Back in 21 Days"
- Or, actually offer a reduced trial price (first month at 50% off, for example)
- Add a small line beneath the button: "Full refund within 21 days if you're not satisfied"

---

## 8. MODERATE: No Plan Recommendation or Decision Help

**The Problem:**
Users see three plans (4G Lite, 4G Plus, 5G Ultra) with technical specs like "4.5G Cat12 Modem with 3x carrier aggregation and 4x4 MIMO." The comparison table helps, but there is no interactive guidance.

**Recommendations:**
- Add a simple quiz/selector: "How many people in your household?" + "What do you mainly use internet for?" that recommends a plan
- Simplify the hardware descriptions -- most customers do not know what Cat12 or 4x4 MIMO means
- The "Perfect For" descriptions are good but should be more prominent (above the spec lists, not below)

---

## 9. ACCESSIBILITY ISSUES IMPACTING CONVERSION

### Perceivable (WCAG 1.x)
| Issue | Severity | WCAG | Recommendation |
|-------|----------|------|----------------|
| Hero text (white on dark photo background) has inconsistent contrast depending on the background image area | Critical | 1.4.3 | Add a solid dark overlay to the hero image to guarantee >= 4.5:1 contrast |
| Small gray text for "Membership Fee: $299" on white background appears low contrast | Major | 1.4.3 | Darken the gray text or increase font size |
| The green accent color (#4CAF50-ish) used for links and checkmarks against white may not meet 3:1 for non-text elements | Major | 1.4.11 | Verify and darken the green slightly |

### Operable (WCAG 2.x)
| Issue | Severity | WCAG | Recommendation |
|-------|----------|------|----------------|
| "Start 21-Day Trial" buttons are form submissions with no visible focus indicator styling | Major | 2.4.7 | Add clear focus ring styles |
| Video testimonial carousel has no keyboard controls visible | Major | 2.1.1 | Add accessible carousel controls |
| Chat widget (Freshchat) floating button overlaps content on mobile | Moderate | 2.5.5 | Ensure 44x44px touch target and no content overlap |

### Understandable (WCAG 3.x)
| Issue | Severity | WCAG | Recommendation |
|-------|----------|------|----------------|
| "Membership Fee" is not explained anywhere on the page | Major | 3.3.2 | Add a tooltip or info icon explaining the fee |
| Plan differences are primarily communicated through jargon (Cat12, MIMO, carrier aggregation) | Moderate | 3.1.5 | Use plain language descriptions |

---

## 10. WHAT THE SITE DOES WELL

- **Strong hero messaging**: "Where cable can't reach, we can" immediately communicates the value prop
- **Social proof depth**: 213+ reviews, video testimonials from real users, "As Seen On" badges -- this is better than most competitors
- **Risk reduction**: 21-day guarantee, no contracts, cancel anytime -- these are the right messages for this audience
- **Price Lock Guarantee**: Smart differentiator in a market where ISPs are notorious for rate hikes
- **Clear plan comparison table**: The feature comparison on /plans is well-structured
- **Phone number prominent**: Having 888.422.2907 in the nav is smart for this demographic

---

## Priority Action Items (Ranked by Conversion Impact)

1. **Add a coverage/address checker** -- Biggest trust barrier for rural customers. Even a "call us to check" flow is better than nothing.

2. **Fix the pricing clarity** -- Show total first-month cost. Rename "Membership Fee" to something that communicates value. Eliminate surprise costs.

3. **Shorten the homepage** -- Cut it in half. Move secondary content to subpages. Add a sticky mobile CTA.

4. **Fix mobile responsiveness** -- Stack plan cards, stack CTAs, implement proper hamburger nav. This audience likely skews mobile-heavy.

5. **Reframe "membership" as "service/plan"** -- Across the whole site. This removes a mental friction point.

6. **Rewrite the CTA button** -- "Start 21-Day Trial" overpromises. Align the button text with what happens next (paying full price with a refund window).

7. **Add a plan recommendation quiz** -- 2-3 questions that output "We recommend the 4G Plus for you." Reduces decision paralysis.

8. **Fix contrast and accessibility** -- Hero text contrast, focus indicators, and keyboard nav for carousels.

---

*Audit conducted by reviewing unlimitedville.com homepage and /plans page at 390x844 mobile viewport.*
