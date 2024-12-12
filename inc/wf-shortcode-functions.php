<?php
function reusable_production_certificates_block() {
    return <<<HTML
<section class="production">
    <h2>Gottlos auf Fashion</h2>
    <p>Wir produzieren ausschließlich in Europa und arbeiten nur mit Unternehmen zusammen, die unseren hohen Ansprüchen an Qualität, Umwelt,- und Arbeitsschutz genügen und das auch von unabhängigen Stellen zertifizieren lassen.</p>
    <div class="services">
        <div class="service">
            <div class="label">
                <a href="https://global-standard.org/the-standard/gots-key-features" target="blank">
                    <img class="alignnone size-medium wp-image-373" src="https://gottlos-auf-mutter.de/wp-content/uploads/2024/01/gots-logo-300x300.png" alt="" width="300" height="300" />
                </a>
            </div>
            <h3><a href="https://global-standard.org/the-standard/gots-key-features" target="blank">Global Organic Textile Standard</a></h3>
            <p>Garantiert ist neben der Einhaltung von Menschen- und Arbeitsrechten in der gesamten Produktionskette die Verwendung von mindestens 70% Bio Fasern in Kleidung. Bio (Organic) Fasern heißt dabei nachhaltiger Anbau ohne Pestizide und ähnlichen Dreck.</p>
        </div>
        <div class="service">
            <div class="label">
                <a href="https://www.oeko-tex.com/de/label-check/detail?number=IW%2000005" target="blank">
                    <img class="size-medium wp-image-374" src="https://gottlos-auf-mutter.de/wp-content/uploads/2024/01/oeko-300x163.webp" alt="oeko-tex standard 100 label" width="300" height="163" />
                </a>
            </div>
            <h3><a href="https://www.oeko-tex.com/de/unsere-standards/oeko-tex-standard-100" target="blank">Oeko Tex 100</a></h3>
            <p>Das führende Kennzeichen für schadstoffgeprüfte Textilien zertifiziert neben der Einhaltung von sozialen und ökologischen Standards in der Produktion vor allem auch die gesundheitliche Unbedenklichkeit der verwendeten Stoffe und Fasern.</p>
        </div>
        <div class="service">
            <div class="label">
                <a href="https://www.amfori.org/en/solutions/social/amfori-bsci" target="blank">
                    <img class="alignnone size-medium wp-image-380" src="https://gottlos-auf-mutter.de/wp-content/uploads/2024/01/Amfori-Logo-300x152.png" alt="Amfori - Trade with Purpose Logo" width="300" height="152" />
                </a>
            </div>
            <h3><a href="https://www.amfori.org/en/solutions/social/amfori-bsci" target="blank">Amfori - Trade with Purpose</a></h3>
            <p>Amfori ist ein führender globaler Verband für nachhaltigen Handel. Neben Umweltschutz stehen hier vor allem die sozialen Aspekte der Produktion im Vordergrund: Z.B. faire Vergütung und sichere Arbeitsbedingungen ohne Gewalt oder Belästigung.</p>
        </div>
    </div>
</section>
HTML;
}
add_shortcode('production-certificates', 'reusable_production_certificates_block');



function reusable_socks_certificates_block() {
    return <<<HTML
<section class="production">
    <h2>Gottlos auf Fashion</h2>
    <p>Wir produzieren ausschließlich in Europa und arbeiten nur mit Unternehmen zusammen, die unseren hohen Ansprüchen an Qualität, Umwelt,- und Arbeitsschutz genügen und das auch von unabhängigen Stellen zertifizieren lassen.</p>
    <div class="services">
        <div class="service">
        </div>
        <div class="service">
            <div class="label">
                <a href="https://www.oeko-tex.com/de/label-check/detail?number=IW%2000005" target="blank">
                    <img class="size-medium wp-image-374" src="https://gottlos-auf-mutter.de/wp-content/uploads/2024/01/oeko-300x163.webp" alt="oeko-tex standard 100 label" width="300" height="163" />
                </a>
            </div>
            <h3><a href="https://www.oeko-tex.com/de/unsere-standards/oeko-tex-standard-100" target="blank">Oeko Tex 100</a></h3>
            <p>Das führende Kennzeichen für schadstoffgeprüfte Textilien zertifiziert neben der Einhaltung von sozialen und ökologischen Standards in der Produktion vor allem auch die gesundheitliche Unbedenklichkeit der verwendeten Stoffe und Fasern.</p>
        </div>
        <div class="service">
        </div>
    </div>
</section>
HTML;
}
add_shortcode('socks-certificates', 'reusable_socks_certificates_block');
