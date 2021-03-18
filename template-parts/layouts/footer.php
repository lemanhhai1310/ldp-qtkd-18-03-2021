<?php $ratio = 0.9; ?>
<div class="footer uk-section-xsmall uk-background-02">
    <div class="uk-container uk-container-small">
        <div class="uk-flex-middle uk-child-width-auto uk-flex-between uk-grid-10" uk-grid uk-scrollspy="cls: uk-animation-slide-bottom-small; target: > div; delay: 300; repeat: true">
            <div>
                <div class="uk-flex-middle uk-grid-5 uk-grid-10-m" uk-grid>
                    <div class="uk-width-auto">
                        <a href="" class="uk-icon-button footer__icon" uk-icon="icon: mail; ratio: <?= $ratio ?>"></a>
                    </div>
                    <div class="uk-width-expand">
                        <span class="footer__txt">daihocfpt@fpt.edu.vn</span>
                    </div>
                </div>
            </div>
            <div uk-scrollspy-class="uk-animation-slide-top-small">
                <a href="" class="uk-button footer__btn uk-button-default uk-button-large uk-border-pill">
                    <div class="uk-flex-middle uk-grid-5 uk-grid-10-m" uk-grid>
                        <div class="uk-width-auto">
                            <span class="uk-icon-button footer__icon" uk-icon="icon: receiver; ratio: <?= $ratio ?>"></span>
                        </div>
                        <div class="uk-width-expand">
                            <span class="footer__txt">024/028 73001866</span>
                        </div>
                    </div>
                </a>
            </div>
            <div>
                <div class="uk-flex-middle uk-grid-5 uk-grid-10-m" uk-grid>
                    <div class="uk-width-auto">
                        <a href="" class="uk-icon-button footer__icon" uk-icon="icon: facebook; ratio: <?= $ratio ?>"></a>
                    </div>
                    <div class="uk-width-expand">
                        <span class="footer__txt">FPT University</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
</body>
</html>