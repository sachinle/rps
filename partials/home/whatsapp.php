<?php
    // Floating WhatsApp chat widget.
    // Launcher (bottom-right) → opens a popup that pops two greeting messages
    // one-by-one, with an "Open Chat" button that deep-links to WhatsApp.
    $waLink = 'https://api.whatsapp.com/send/?phone=917200020748&text=Hi+%2ARathinam+International+Public+School%2A%21+I+need+more+info+about+Rathinam+International+Public+School+https%3A%2F%2Frathinamschool.ac.in%2F&type=phone_number&app_absent=0';
    // WhatsApp glyph reused in a couple of spots
    $waIcon = '<svg viewBox="0 0 32 32" fill="currentColor" aria-hidden="true"><path d="M16.04 4C9.9 4 4.92 8.98 4.92 15.12c0 2.05.56 3.97 1.54 5.62L4.8 27l6.44-1.63c1.6.87 3.42 1.37 5.36 1.37 6.14 0 11.12-4.98 11.12-11.12S22.18 4 16.04 4zm0 20.3c-1.74 0-3.36-.5-4.72-1.36l-.34-.2-3.82.97 1.02-3.72-.22-.36a9.02 9.02 0 0 1-1.4-4.82c0-5.02 4.1-9.12 9.12-9.12s9.12 4.1 9.12 9.12-4.08 9.12-9.12 9.12zm5.02-6.83c-.28-.14-1.62-.8-1.88-.9-.25-.1-.44-.14-.62.14-.18.28-.7.9-.86 1.08-.16.18-.32.2-.6.07-.28-.14-1.16-.43-2.2-1.36-.82-.72-1.36-1.62-1.52-1.9-.16-.28-.02-.42.12-.56.13-.13.28-.33.42-.5.14-.18.18-.3.28-.48.09-.18.05-.34-.02-.48-.08-.14-.62-1.5-.86-2.06-.22-.53-.45-.46-.62-.47l-.53-.01c-.18 0-.48.07-.72.35-.25.28-.95.92-.95 2.25 0 1.32.97 2.6 1.1 2.78.14.18 1.9 2.9 4.6 4.06.64.28 1.14.44 1.53.57.64.2 1.22.17 1.68.1.51-.07 1.62-.66 1.85-1.3.23-.64.23-1.18.16-1.3-.07-.12-.25-.2-.53-.34z"/></svg>';
?>
<div id="wa-widget" class="wa-widget">

    <!-- Chat popup -->
    <div id="wa-popup" class="wa-popup wa-hidden" role="dialog" aria-label="WhatsApp chat">
        <div class="wa-header">
            <div class="wa-title">
                <span class="wa-avatar"><?= $waIcon ?></span>
                <span class="wa-headtext">
                    <span class="wa-name">WhatsApp</span>
                    <span class="wa-status">Typically replies instantly</span>
                </span>
            </div>
            <button id="wa-close" class="wa-close" aria-label="Close chat">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><path d="M18 6 6 18M6 6l12 12"/></svg>
            </button>
        </div>

        <div id="wa-body" class="wa-body">
            <!-- Typing bubble shown briefly before each message -->
            <div class="wa-typing" id="wa-typing"><span></span><span></span><span></span></div>
            <div class="wa-msg">Hi , welcome to <strong>Rathinam International Public School</strong></div>
            <div class="wa-msg">Can we help you?</div>
        </div>

        <div class="wa-footer">
            <a href="<?= $waLink ?>" target="_blank" rel="noopener" class="wa-openchat">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"/></svg>
                Open Chat
            </a>
        </div>
    </div>

    <!-- Launcher -->
    <button id="wa-launcher" class="wa-launcher" aria-label="Chat with us on WhatsApp">
        <span class="wa-launcher-ring" aria-hidden="true"></span>
        <?= $waIcon ?>
    </button>
</div>
