/*
 * Generic UI elements (button, radio button, checkbox, switch etc.)
 */

* {
    accent-color: <?= $vars['theme']['primary']; ?>;
}

.magic-checkbox:checked+label:before {
    background-color: <?= $vars['theme']['primary']; ?>;
}

.onoffswitch-checkbox:checked + .onoffswitch-label {
    background-color: <?= $vars['theme']['primary']; ?>;
}

.onoffswitch-checkbox:checked + .onoffswitch-label, .onoffswitch-checkbox:checked + .onoffswitch-label:before {
    border-color: <?= $vars['theme']['primary']; ?>;
}

/*
 * Various link colors of content containers
 *     .dash-card-content h3               - Mailbox title on tile of main page
 *     .content-2col                       - Right-sided content container with conversations, lists and more; exceptions for text in dropdown menus and icons
 *     .customer-contacts .contact-main    - Customer contact in right pane of conversations and left pane of profiles
 *     .note-editing-area                  - Popup when creating saved replies
 *     .wizard-body                        - Popup when creating new user, new mailbox
 *     .kb-category-content                - Knowledge Base content
 *     .kb-ref-table-container             - Links when inserting a KB reference
 *     .kb-articles                        - Links to KB articles on the main page
 *     .footer                             - Page footer with FreeScout version linked to system info
 */

.dash-card-content h3 a {
    color: <?= $vars['theme']['primary']; ?>;
}

.dash-card-content h3 a,
.content-2col a:not(.glyphicon, .dropdown-menu li a),
.customer-contacts .contact-main,
.note-editing-area a,
.wizard-body a,
.kb-category-content a,
.kb-ref-table-container a,
.kb-articles a,
.footer a {
    color: <?= $vars['theme']['primary']; ?>;
}

.dash-card-content h3 a:active,
.content-2col a:active,
.customer-contacts .contact-main:hover a:active,
.note-editing-area a:active,
.wizard-body a:active,
.kb-category-content a:active,
.kb-ref-table-container a:active,
.kb-articles a:active,
.footer a:active {
    color: <?= $vars['theme']['secondary']; ?>;
}

.dash-card-content h3 a:hover,
.content-2col a:hover,
.customer-contacts .contact-main:hover,
.note-editing-area a:hover,
.wizard-body a:hover,
.kb-category-content a:hover,
.kb-ref-table-container a:hover,
.kb-articles a:hover,
.footer a:hover {
    color: <?= $vars['theme']['hover']; ?>;
}

.dash-card-content h3 a:focus,
.content-2col a:focus,
.customer-contacts .contact-main:focus,
.note-editing-area a:focus,
.wizard-body a:focus,
.kb-category-content a:focus,
.kb-ref-table-container a:focus,
.kb-articles a:focus,
.footer a:focus {
    color: <?= $vars['theme']['primary']; ?>;
}

/*
 * Selected tags in dropdown menu of conversation toolbar
 */

.select2-results__option--highlighted {
    background-color: <?= $vars['theme']['primary']; ?> !important;
}

/*
 * Jump marks to previous / next pages, e.g. for user log records
 */

.pagination > .active > span {
    background-color: <?= $vars['theme']['primary']; ?> !important;
    border-color: <?= $vars['theme']['primary']; ?> !important;
}

.pagination a {
    color: <?= $vars['theme']['primary']; ?> !important;
}

/*
 * Navigation bar
 */

.navbar-default {
    background-color: <?= $vars['theme']['primary']; ?>;
    border-color: #e7e7e7;
}

.navbar-default .navbar-brand:hover {
    color: #5e5e5e;
    background-color: <?= $vars['theme']['hover']; ?>;
}

.navbar-default .navbar-nav > .active > a, .navbar-default .navbar-nav > .active > a:hover, .navbar-default .navbar-nav > .active > a:focus {
    color: <?= $vars['theme']['primary']; ?>;
    background-color: <?= $vars['theme']['secondary']; ?>;
}

.navbar-default .navbar-nav > .open > a, .navbar-default .navbar-nav > .open > a:hover, .navbar-default .navbar-nav > .open > a:focus, .navbar-default .navbar-nav > li > a:hover {
    color: <?= $vars['theme']['secondary']; ?>;
    background-color: <?= $vars['theme']['hover']; ?>;
}

/*
 * Dropdown menus, e.g. Mailbox / Manage menu, web notifications, search menu
 */

.dropdown-menu > .active > a, .dropdown-menu > .active > a:hover, .dropdown-menu > .active > a:focus {
    background-color: <?= $vars['theme']['secondary']; ?>;
    color: <?= $vars['theme']['primary']; ?>;
}

.dropdown-menu a, .dropdown-menu a:active, .dropdown-menu a:hover, .dropdown-menu a:focus {
    color: <?= $vars['theme']['primary']; ?>;
}

.dropdown-menu .glyphicon {
    color: <?= $vars['theme']['primary']; ?> !important;
}

/*
 * Sidebar menus, e.g. mailbox folders
 */

.sidebar-menu a {
    color: <?= $vars['theme']['primary']; ?> !important;
}

.sidebar-menu .active a, .sidebar-menu .active .glyphicon {
    color: <?= $vars['theme']['primary']; ?> !important;
    background-color: <?= $vars['theme']['secondary']; ?>;
}

.sidebar-menu-toggle.active {
    background-color: <?= $vars['theme']['primary']; ?> !important;
    border-color: <?= $vars['theme']['primary']; ?> !important;
}

.sidebar-buttons a:hover {
    color: <?= $vars['theme']['hover']; ?>;
}

/*
 * Section headers in content container, e.g. subtitles of "Settings"
 */

.section-heading {
    background-color: <?= $vars['theme']['secondary']; ?>;
    color: <?= $vars['theme']['hover']; ?>;
}

/*
 * Editor's menu bar
 */

.panel-heading {
    background-color: <?= $vars['theme']['secondary']; ?> !important;
}

/*
 * Various buttons
 */

.btn-primary, .note-editor .btn-primary {
    color: #fff !important;
    background-color: <?= $vars['theme']['primary']; ?>;
    border-color: <?= $vars['theme']['primary']; ?>;
}

.btn-primary:active, .note-editor .btn-primary:active {
    color: #fff;
    background-color: <?= $vars['theme']['secondary']; ?> !important;
    border-color: <?= $vars['theme']['secondary']; ?> !important;
}

.btn-primary:hover, .note-editor .btn-primary:hover {
    color: #fff;
    background-color: <?= $vars['theme']['hover']; ?>;
    border-color: <?= $vars['theme']['hover']; ?>;
}

.btn-primary[disabled]:hover, .note-editor .btn-primary[disabled]:hover {
    background-color: <?= $vars['theme']['hover']; ?>;
    border-color: <?= $vars['theme']['hover']; ?>;
}

.btn-bordered {
    color: <?= $vars['theme']['primary']; ?>;
}

.btn-bordered:active {
    color: <?= $vars['theme']['secondary']; ?>;
}

.btn-bordered:hover {
    color: <?= $vars['theme']['hover']; ?>;
    background-color: transparent;
    border-color: <?= $vars['theme']['hover']; ?>;
}

.btn-link {
    color: <?= $vars['theme']['primary']; ?>;
}

.btn-link:active {
    color: <?= $vars['theme']['secondary']; ?>;
}

.btn-link:hover {
    color: <?= $vars['theme']['hover']; ?>;
}

.btn-trans:hover, .btn-trans:focus {
    color: <?= $vars['theme']['hover']; ?>;
}

.btn:focus, btn:active:focus {
    outline-style: none;
}

.table-conversations thead {
    background-color: <?= $vars['theme']['secondary']; ?>;
}

.table-conversations th a, .table-conversations th a:hover, .table-conversations th a:focus, .table-conversations th span {
    color: <?= $vars['theme']['hover']; ?>;
}

#conv-toolbar {
    background-color: <?= $vars['theme']['secondary']; ?>;
}

.conv-actions .conv-action {
    color: <?= $vars['theme']['hover']; ?>;
}

.conv-actions .conv-action:hover {
    color: <?= $vars['theme']['hover']; ?>;
}

.help-inline {
    margin-top: 5px;
    margin-bottom: 10px;
    margin-left: 7px;
    color: #93a1af;
}

.main-heading {
    background-color: <?= $vars['theme']['secondary']; ?>;
}

/*
 * Module-specific CSS for Themes
 */

.theme-colours .btn {
	margin-right: 5px;
}
.theme-colours .btn:active,
.theme-colours .btn.active {
	-webkit-box-shadow: inset 0 3px 5px rgba(0, 0, 0, .8);box-shadow: inset 0 3px 5px rgba(0, 0, 0, .8);
}
#colour-label {
    text-transform: capitalize;
}
.theme-grey {
    background-color: #97a4b0;
}
.theme-grey:hover {
    background-color: #8897a6;
}
.theme-green {
    background-color: #52ad67;
}
.theme-green:hover {
    background-color: #24963f;
}
.theme-blue {
    background-color: #349DE9;
}
.theme-blue:hover {
    background-color: #0C5DD2;
}
.theme-orange {
    background-color: #F68F33;
}
.theme-orange:hover {
    background-color: #e38330;
}
.theme-purple {
    background-color: #8c75bd;
}
.theme-purple:hover {
    background-color: #6d53a3;
}
.theme-red {
    background-color: #F0554F;
}
.theme-red:hover {
    background-color: #E52F28;
}
.theme-brown {
    background-color: #9e6937;
}
.theme-brown:hover {
    background-color: #844204;
}
