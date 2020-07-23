<div class="container listings-page">
    <search-tab-layout-manager class="height-100-mobile-app">
        <div class="row shop-by-row height-100-mobile-app">
            <div class="d-none">
                <sidebar-search-filters-panel>
                    <facet-left-panel>
                        <cfe-responsive-panel>
                            <div>
                                <ng-transclude>
                                    <facet-panel-template class="left-panel">
                                        <facet-container>
                                            <ng-transclude>
                                                <ng-include>
                                                    <form name="filterForm" action="javascript:">
                                                        <h3>Filter By</h3>
                                                        <div class="left-panel-template freelancer-search-filters-block">
                                                            <talent-quality-facet-block>
                                                                <div class="talent-quality-facet-block ng-hide">
                                                                    <facet-brief-presentation>
                                                                        <section>
                                                                            <label class="title">
                                                                                Talent Quality
                                                                                <a href="javascript:" class="pull-right">
                                                                                    <span class="glyphicon m-0-right air-icon-arrow-collapse"></span>
                                                                                </a>
                                                                            </label>
                                                                            <div class="in" style="height: auto;">
                                                                                <div class="m-sm-top">
                                                                                    <ng-transclude>
                                                                                        <talent-quality-facet-checkbox
                                                                                            class="upwork-tq-top-rated-facet top-rated-checkbox">
                                                                                            <div class="checkbox">
                                                                                                <label>
                                                                                                    <input
                                                                                                        type="checkbox"
                                                                                                        class="ng-pristine ng-untouched ng-valid ng-empty"
                                                                                                        disabled="disabled">
                                                                                                    <span
                                                                                                        class="checkbox-replacement-helper">
                                                                                                        <span
                                                                                                            class="glyphicon air-icon-check"></span>
                                                                                                    </span>
                                                                                                    <ng-transclude>
                                                                                                        <span
                                                                                                            class="badge badge-talent disabled"
                                                                                                            å>
                                                                                                            <span
                                                                                                                class="glyphicon air-icon-top-rated"></span>
                                                                                                            Top rated
                                                                                                        </span>
                                                                                                        <span
                                                                                                            class="glyphicon air-icon-password m-xs-left-right"></span>
                                                                                                    </ng-transclude>
                                                                                                </label>
                                                                                            </div>
                                                                                        </talent-quality-facet-checkbox>
                                                                                        <talent-quality-facet-checkbox
                                                                                            class="upwork-tq-rising-talent-facet rising-talent-checkbox">
                                                                                            <div class="checkbox">
                                                                                                <label>
                                                                                                    <input
                                                                                                        type="checkbox"
                                                                                                        class="ng-pristine ng-untouched ng-valid ng-empty"
                                                                                                        disabled="disabled">
                                                                                                    <span
                                                                                                        class="checkbox-replacement-helper">
                                                                                                        <span
                                                                                                            class="glyphicon air-icon-check"></span>
                                                                                                    </span>
                                                                                                    <ng-transclude>
                                                                                                        <span
                                                                                                            class="badge badge-talent disabled">
                                                                                                            <span
                                                                                                                class="glyphicon air-icon-rising-talent"></span>
                                                                                                            Rising
                                                                                                            talent
                                                                                                        </span>
                                                                                                        <span
                                                                                                            class="glyphicon air-icon-password m-xs-left-right"></span>
                                                                                                    </ng-transclude>
                                                                                                </label>
                                                                                            </div>
                                                                                        </talent-quality-facet-checkbox>
                                                                                    </ng-transclude>
                                                                                </div>
                                                                            </div>
                                                                            <div class="ng-hide">
                                                                                <div class="collapse"
                                                                                    style="height: 0px;">
                                                                                    <div class="p-sm-top">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </section>
                                                                    </facet-brief-presentation>
                                                                </div>
                                                            </talent-quality-facet-block>
                                                            <facet-brief-presentation facet-names="category_uid"
                                                                title="Category">
                                                                <section class="">
                                                                    <label class="title">
                                                                        Category
                                                                        <a href="javascript:" class="pull-right">
                                                                            <span
                                                                                class="glyphicon m-0-right air-icon-arrow-collapse"></span>
                                                                        </a>
                                                                    </label>
                                                                    <div class="in" style="height: auto;">
                                                                        <div class="m-sm-top">
                                                                            <ng-transclude>
                                                                                <facet-simple-list>
                                                                                    <ul class="list-unstyled">
                                                                                        <li>
                                                                                            <a href="" class="active"> All Categories </a>
                                                                                        </li>
                                                                                        <li>
                                                                                            <a href="">Accounting &amp;Consulting </a>
                                                                                        </li>
                                                                                        <li>
                                                                                            <a href="">Admin Support
                                                                                            </a>
                                                                                        </li>
                                                                                        <li>
                                                                                            <a href="">Customer Service</a>
                                                                                        </li>
                                                                                        <li>
                                                                                            <a href="">Data Science &amp;Analytics </a>
                                                                                        </li>
                                                                                        <li>
                                                                                            <a href="">Design &amp;Creative </a> </li>
                                                                                        <li>
                                                                                            <a href="">Engineering &amp;Architecture </a>
                                                                                        </li>
                                                                                        <li>
                                                                                            <a href="">IT &amp; Networking</a>
                                                                                        </li>
                                                                                        <li>
                                                                                            <a href="">Legal </a>
                                                                                        </li>
                                                                                        <li>
                                                                                            <a href="">Sales &amp;Marketing </a>
                                                                                        </li>
                                                                                        <li>
                                                                                            <a href="">Translation </a>
                                                                                        </li>
                                                                                        <li>
                                                                                            <a href="">Web, Mobile &amp;Software Dev </a>
                                                                                        </li>
                                                                                        <li>
                                                                                            <a href="">Writing </a>
                                                                                        </li>
                                                                                    </ul>
                                                                                </facet-simple-list>
                                                                            </ng-transclude>
                                                                        </div>
                                                                    </div>
                                                                    <div class="ng-hide">
                                                                        <div class="collapse" style="height: 0px;">
                                                                            <div class="p-sm-top">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </section>
                                                            </facet-brief-presentation>
                                                            <facet-brief-presentation facet-names="occupation_uid"
                                                                title="Specialties">
                                                                <section class="ng-hide">
                                                                    <label class="title"> Specialties
                                                                        <a href="javascript:" class="pull-right">
                                                                            <span
                                                                                class="glyphicon m-0-right air-icon-arrow-collapse"></span>
                                                                        </a>
                                                                    </label>
                                                                    <div class="in" style="height: auto;">
                                                                        <div class="m-sm-top">
                                                                            <ng-transclude>
                                                                                <facet-simple-list>
                                                                                    <ul class="list-unstyled">
                                                                                    </ul>
                                                                                    <see-more-button>
                                                                                    </see-more-button>
                                                                                </facet-simple-list>
                                                                            </ng-transclude>
                                                                        </div>
                                                                    </div>
                                                                    <div class="ng-hide">
                                                                        <div class="collapse" style="height: 0px;">
                                                                            <div class="p-sm-top">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </section>
                                                            </facet-brief-presentation>
                                                            <facet-brief-presentation>
                                                                <section>
                                                                    <label class="title"> Location
                                                                        <a href="javascript:" class="pull-right">
                                                                            <span class="glyphicon m-0-right air-icon-arrow-collapse"></span>
                                                                        </a>
                                                                    </label>
                                                                    <div class="in" style="height: auto;">
                                                                        <div class="m-sm-top">
                                                                            <ng-transclude>
                                                                                <facet-input-location-list>
                                                                                    <div class="facet-input-location-list">
                                                                                        <div class="input-group input-group-search">
                                                                                            <label class="input-group-addon">
                                                                                                <span class="glyphicon air-icon-search"></span>
                                                                                                <span class="sr-only"></span>
                                                                                            </label>
                                                                                            <input class="form-control" type="search" autocomplete="off" placeholder="Search locations">
                                                                                            <div class="typeahead" id="typeahead-3795-8964">
                                                                                                <ul class="eo-dropdown-menu ng-hide" style="display: block;">
                                                                                                </ul>
                                                                                                <ul class="eo-dropdown-menu eo-dropdown-menu-validation ng-inactive ng-hide" style="display: block;">
                                                                                                </ul>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="checkbox m-md-top ng-hide">
                                                                                            <label>
                                                                                                <input type="checkbox" class="ng-pristine ng-untouched ng-valid ng-empty">
                                                                                                <span class="checkbox-replacement-helper">
                                                                                                    <span class="glyphicon air-icon-check"></span>
                                                                                                </span>Any location
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                </facet-input-location-list>
                                                                            </ng-transclude>
                                                                        </div>
                                                                    </div>
                                                                    <div class="ng-hide">
                                                                        <div class="collapse" style="height: 0px;">
                                                                            <div class="p-sm-top">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </section>
                                                            </facet-brief-presentation>
                                                            <facet-brief-presentation is-open="true">
                                                                <section class="ng-hide">
                                                                    <label class="title"> Location in U.S.
                                                                        <a href="javascript:" class="pull-right">
                                                                            <span class="glyphicon m-0-right air-icon-arrow-collapse"></span>
                                                                        </a>
                                                                    </label>
                                                                    <div class="in" style="height: auto;">
                                                                        <div class="m-sm-top">
                                                                            <ng-transclude>
                                                                                <div class="form-group m-md-bottom">
                                                                                    <facet-input-us-location-list>
                                                                                        <div class="ng-hide">
                                                                                            <div class="input-group input-group-search input-us-location">
                                                                                                <up-c-dropdown-search class="highlighted-dropdown-search sc-up-c-dropdown-search-h sc-up-c-dropdown-search-s is-fullscreen hydrated" placeholder="Timezone or state">
                                                                                                    <div class="up-c-dropdown-search sc-up-c-dropdown-search">
                                                                                                        <up-c-on-media-change
                                                                                                            class="sc-up-c-dropdown-search hydrated">
                                                                                                            <up-c-on-click-outside
                                                                                                                class="sc-up-c-dropdown-search hydrated">
                                                                                                                <up-c-transition page-title="Timezone or state" class="sc-up-c-dropdown-search hydrated">
                                                                                                                    <div class="btn-group dropdown sc-up-c-dropdown-search">
                                                                                                                        <button class="btn btn-default dropdown-toggle sc-up-c-dropdown-search" type="button">
                                                                                                                            <span class="ellipsis sc-up-c-dropdown-search">Timezone
                                                                                                                                or
                                                                                                                                state</span>
                                                                                                                            <up-c-icon class="sc-up-c-dropdown-search glyph-icon hydrated" size="">
                                                                                                                                <span class="sr-only">
                                                                                                                                    <slot-fb>
                                                                                                                                        Toggle
                                                                                                                                        dropdown
                                                                                                                                        expand
                                                                                                                                    </slot-fb>
                                                                                                                                </span>
                                                                                                                                <up-c-load-svg
                                                                                                                                    class="hydrated">
                                                                                                                                </up-c-load-svg>
                                                                                                                                <span
                                                                                                                                    class="caret glyphicon air-icon-arrow-expand"></span>
                                                                                                                            </up-c-icon>
                                                                                                                        </button>
                                                                                                                        <ul class="dropdown-menu transition-content sc-up-c-dropdown-search">
                                                                                                                            <li class="sc-up-c-dropdown-search">
                                                                                                                                <form class="sc-up-c-dropdown-search">
                                                                                                                                    <div class="input-group input-group-search sc-up-c-dropdown-search">
                                                                                                                                        <label class="input-group-addon sc-up-c-dropdown-search sc-up-c-dropdown-search-s">
                                                                                                                                            <slot-fb name="addon-icon" class="sc-up-c-dropdown-search">
                                                                                                                                                <up-c-icon class="d-flex align-items-center sc-up-c-dropdown-search glyph-icon hydrated">
                                                                                                                                                    <span class="sr-only">
                                                                                                                                                        <slot-fb>
                                                                                                                                                            Search
                                                                                                                                                        </slot-fb>
                                                                                                                                                    </span>
                                                                                                                                                    <up-c-load-svg class="hydrated">
                                                                                                                                                    </up-c-load-svg>
                                                                                                                                                    <span class="glyphicon air-icon-search"></span>
                                                                                                                                                </up-c-icon>
                                                                                                                                            </slot-fb>
                                                                                                                                        </label>
                                                                                                                                        <input class="form-control sc-up-c-dropdown-search"
                                                                                                                                            type="search"
                                                                                                                                            placeholder="Timezone or state">
                                                                                                                                    </div>
                                                                                                                                </form>
                                                                                                                            </li>
                                                                                                                            <li class="hidden sc-up-c-dropdown-search sc-up-c-dropdown-search-s">
                                                                                                                                <slot-fb name="no-results" class="sc-up-c-dropdown-search">
                                                                                                                                    <span class="d-flex align-items-center ml-10 py-10 sc-up-c-dropdown-search">
                                                                                                                                        <up-c-icon class="ml-5 mr-10 text-muted sc-up-c-dropdown-search hydrated">
                                                                                                                                            <span class="sr-only">
                                                                                                                                                <slot-fb>
                                                                                                                                                    No
                                                                                                                                                    results
                                                                                                                                                    found
                                                                                                                                                </slot-fb>
                                                                                                                                            </span>
                                                                                                                                            <up-c-load-svg class="hydrated">
                                                                                                                                            </up-c-load-svg>
                                                                                                                                        </up-c-icon>
                                                                                                                                        <span class="text-muted sc-up-c-dropdown-search">No
                                                                                                                                            results
                                                                                                                                            found</span>
                                                                                                                                    </span>
                                                                                                                                </slot-fb>
                                                                                                                            </li>
                                                                                                                        </ul>
                                                                                                                    </div>
                                                                                                                </up-c-transition>
                                                                                                            </up-c-on-click-outside>
                                                                                                            <up-c-fullscreen class="sc-up-c-dropdown-search hydrated">
                                                                                                            </up-c-fullscreen>
                                                                                                        </up-c-on-media-change>
                                                                                                    </div>
                                                                                                </up-c-dropdown-search>
                                                                                            </div>

                                                                                            <div>
                                                                                                <div class="checkbox m-md-top ng-hide">
                                                                                                    <label>
                                                                                                        <input type="checkbox" class="ng-pristine ng-untouched ng-valid ng-empty">
                                                                                                        <span class="checkbox-replacement-helper">
                                                                                                            <span class="glyphicon air-icon-check"></span>
                                                                                                        </span> Any
                                                                                                        U.S.
                                                                                                        location
                                                                                                    </label>
                                                                                                </div>

                                                                                            </div>

                                                                                        </div>
                                                                                    </facet-input-us-location-list>


                                                                                </div>
                                                                            </ng-transclude>
                                                                        </div>
                                                                    </div>
                                                                    <div>
                                                                        <div class="collapse" style="height: 0px;">
                                                                            <div class="p-sm-top">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </section>
                                                            </facet-brief-presentation>
                                                            <facet-brief-presentation>
                                                                <section>
                                                                    <label class="title">
                                                                        Talent type
                                                                        <a href="javascript:" class="pull-right">
                                                                            <span class="glyphicon m-0-right air-icon-arrow-collapse"></span>
                                                                        </a>
                                                                    </label>
                                                                    <div class="in" style="height: auto;">
                                                                        <div class="m-sm-top">
                                                                            <ng-transclude>
                                                                                <facet-input-radio-list>
                                                                                    <div>
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input type="radio" name="3824">
                                                                                                <span class="checkbox-replacement-helper"></span>
                                                                                                Freelancers &amp;
                                                                                                Agencies
                                                                                            </label>
                                                                                        </div>

                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input type="radio" name="3827" value="independent">
                                                                                                <span class="checkbox-replacement-helper"></span>Freelancers
                                                                                            </label>
                                                                                        </div>

                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input type="radio" name="3830" value="agency">
                                                                                                <span class="checkbox-replacement-helper"></span>Agencies
                                                                                            </label>
                                                                                        </div>

                                                                                    </div>
                                                                                </facet-input-radio-list>
                                                                            </ng-transclude>
                                                                        </div>
                                                                    </div>
                                                                    <div>
                                                                        <div class="collapse" style="height: 0px;">
                                                                            <div class="p-sm-top">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </section>
                                                            </facet-brief-presentation>
                                                            <facet-brief-presentation>
                                                                <section>
                                                                    <label class="title"> Hourly rate
                                                                        <a href="javascript:" class="pull-right">
                                                                            <span
                                                                                class="glyphicon m-0-right air-icon-arrow-expand"></span>
                                                                        </a>
                                                                    </label>
                                                                    <div class="collapse" style="height: 0px;">
                                                                        <div class="m-sm-top">
                                                                            <ng-transclude>
                                                                                <facet-input-radio-list>
                                                                                    <div>
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input type="radio" class="ng-pristine ng-untouched ng-valid ng-empty" name="3846">
                                                                                                <span class="checkbox-replacement-helper"></span>
                                                                                                Any hourly rate
                                                                                            </label>
                                                                                        </div>

                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input type="radio" name="3849" value="0-10">
                                                                                                <span
                                                                                                    class="checkbox-replacement-helper"></span>
                                                                                                $10 and below
                                                                                            </label>
                                                                                        </div>

                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input type="radio" name="3852" value="10-30">
                                                                                                <span
                                                                                                    class="checkbox-replacement-helper"></span>
                                                                                                $10 - $30
                                                                                            </label>
                                                                                        </div>

                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input type="radio" name="3855" value="30-60">
                                                                                                <span class="checkbox-replacement-helper"></span>
                                                                                                $30 - $60
                                                                                            </label>
                                                                                        </div>

                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input type="radio"
                                                                                                    class="ng-pristine ng-untouched ng-valid ng-empty"
                                                                                                    name="3858"
                                                                                                    value="60">
                                                                                                <span
                                                                                                    class="checkbox-replacement-helper"></span>
                                                                                                $60 &amp; above
                                                                                            </label>
                                                                                        </div>

                                                                                    </div>
                                                                                </facet-input-radio-list>
                                                                            </ng-transclude>
                                                                        </div>
                                                                    </div>
                                                                    <div>
                                                                        <div class="in" style="height: auto;">
                                                                            <div class="p-sm-top">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </section>
                                                            </facet-brief-presentation>
                                                            <facet-brief-presentation>
                                                                <section class="">
                                                                    <label class="title"> Job Success
                                                                        <a href="javascript:" class="pull-right">
                                                                            <span
                                                                                class="glyphicon m-0-right air-icon-arrow-expand"></span>
                                                                        </a>
                                                                    </label>
                                                                    <div class="collapse" style="height: 0px;">
                                                                        <div class="m-sm-top">
                                                                            <ng-transclude>
                                                                                <facet-input-upwork-plus-selector-list>
                                                                                    <div
                                                                                        class="upwork-plus-radio-facet">
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input type="radio"
                                                                                                    class="ng-pristine ng-untouched ng-valid ng-empty"
                                                                                                    name="4008">
                                                                                                <span
                                                                                                    class="checkbox-replacement-helper"></span>
                                                                                                Any job success
                                                                                            </label>
                                                                                        </div>

                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input type="radio"
                                                                                                    class="ng-pristine ng-untouched ng-valid ng-empty"
                                                                                                    name="4011"
                                                                                                    value="80">
                                                                                                <span
                                                                                                    class="checkbox-replacement-helper"></span>
                                                                                                80% &amp; up
                                                                                            </label>
                                                                                        </div>

                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input type="radio"
                                                                                                    class="ng-pristine ng-untouched ng-valid ng-empty"
                                                                                                    name="4014"
                                                                                                    value="90">
                                                                                                <span
                                                                                                    class="checkbox-replacement-helper"></span>
                                                                                                90% &amp; up
                                                                                            </label>
                                                                                        </div>







                                                                                        <div>
                                                                                            <div
                                                                                                class="p-0-bottom radio d-none-mobile-app">
                                                                                                <label>
                                                                                                    <input type="radio"
                                                                                                        class="ng-pristine ng-untouched ng-valid ng-empty"
                                                                                                        name="3880"
                                                                                                        disabled="disabled"
                                                                                                        value="top_rated">
                                                                                                    <span
                                                                                                        class="checkbox-replacement-helper"></span>
                                                                                                    <span
                                                                                                        class="badge badge-talent disabled">
                                                                                                        <span
                                                                                                            class="glyphicon air-icon-top-rated"></span>
                                                                                                        Top Rated
                                                                                                    </span>
                                                                                                    <span
                                                                                                        class="glyphicon air-icon-password m-xs-left-right"></span>

                                                                                                </label>
                                                                                            </div>
                                                                                            <facet-input-checkbox
                                                                                                class="upwork-plus-radio-facet rising-talent-checkbox">
                                                                                                <div class="checkbox">
                                                                                                    <label>
                                                                                                        <input
                                                                                                            type="checkbox"
                                                                                                            class="ng-pristine ng-untouched ng-valid ng-empty"
                                                                                                            disabled="disabled">
                                                                                                        <span
                                                                                                            class="checkbox-replacement-helper">
                                                                                                            <span
                                                                                                                class="glyphicon air-icon-check"></span>
                                                                                                        </span>
                                                                                                        <ng-transclude>
                                                                                                            <span
                                                                                                                class="badge badge-talent disabled">
                                                                                                                <span
                                                                                                                    class="glyphicon air-icon-rising-talent"></span>
                                                                                                                Rising
                                                                                                                talent
                                                                                                            </span>
                                                                                                            <span
                                                                                                                class="glyphicon air-icon-password m-xs-left-right"></span>
                                                                                                        </ng-transclude>
                                                                                                    </label> </div>
                                                                                            </facet-input-checkbox>
                                                                                        </div>

                                                                                    </div>
                                                                                </facet-input-upwork-plus-selector-list>

                                                                            </ng-transclude>
                                                                        </div>
                                                                    </div>
                                                                    <div>
                                                                        <div class="in" style="height: auto;">
                                                                            <div class="p-sm-top">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </section>
                                                            </facet-brief-presentation>
                                                            <facet-brief-presentation>
                                                                <section>
                                                                    <label class="title"> Earned amount
                                                                        <a href="javascript:" class="pull-right">
                                                                            <span
                                                                                class="glyphicon m-0-right air-icon-arrow-expand"></span>
                                                                        </a>
                                                                    </label>
                                                                    <div class="collapse" style="height: 0px;">
                                                                        <div class="m-sm-top">
                                                                            <ng-transclude>
                                                                                <facet-input-radio-list>
                                                                                    <div>
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input type="radio"
                                                                                                    class="ng-pristine ng-untouched ng-valid ng-empty"
                                                                                                    name="3906">
                                                                                                <span
                                                                                                    class="checkbox-replacement-helper"></span>
                                                                                                Any amount earned
                                                                                            </label>
                                                                                        </div>

                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input type="radio"
                                                                                                    lass="ng-pristine ng-untouched ng-valid ng-empty"
                                                                                                    name="3909"
                                                                                                    value="1">
                                                                                                <span
                                                                                                    class="checkbox-replacement-helper"></span>
                                                                                                $1+ earned
                                                                                            </label>
                                                                                        </div>

                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input type="radio"
                                                                                                    class="ng-pristine ng-untouched ng-valid ng-empty"
                                                                                                    name="3912"
                                                                                                    value="100">
                                                                                                <span
                                                                                                    class="checkbox-replacement-helper"></span>$100+
                                                                                                earned
                                                                                            </label>
                                                                                        </div>

                                                                                        <div class="radio"
                                                                                            data-ng-repeat="listItem in $ctrl.facet.valueList.flatList track by listItem.value">
                                                                                            <label>
                                                                                                <input type="radio"
                                                                                                    class="ng-pristine ng-untouched ng-valid ng-empty"
                                                                                                    name="3915"
                                                                                                    value="1000">
                                                                                                <span
                                                                                                    class="checkbox-replacement-helper"></span>$1k+
                                                                                                earned
                                                                                            </label>
                                                                                        </div>

                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input type="radio"
                                                                                                    class="ng-pristine ng-untouched ng-valid ng-empty"
                                                                                                    name="3918"
                                                                                                    value="10000">
                                                                                                <span
                                                                                                    class="checkbox-replacement-helper"></span>
                                                                                                $10k+ earned
                                                                                            </label>
                                                                                        </div>

                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input type="radio"
                                                                                                    class="ng-pristine ng-untouched ng-valid ng-empty"
                                                                                                    name="3921"
                                                                                                    value="0">
                                                                                                <span
                                                                                                    class="checkbox-replacement-helper"></span>
                                                                                                No earnings yet
                                                                                            </label>
                                                                                        </div>

                                                                                    </div>
                                                                                </facet-input-radio-list>
                                                                            </ng-transclude>
                                                                        </div>
                                                                    </div>
                                                                    <div class="ng-hide">
                                                                        <div class="in" style="height: auto;">
                                                                            <div class="p-sm-top">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </section>
                                                            </facet-brief-presentation>
                                                            <facet-brief-presentation>
                                                                <section>
                                                                    <label class="title">
                                                                        Hours billed
                                                                        <a href="javascript:" class="pull-right"><span
                                                                                class="glyphicon m-0-right air-icon-arrow-expand"></span>
                                                                        </a>
                                                                    </label>
                                                                    <div class="collapse" style="height: 0px;">
                                                                        <div class="m-sm-top">
                                                                            <ng-transclude>
                                                                                <facet-input-radio-list
                                                                                    data-facet-name="hrs">
                                                                                    <div>
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input type="radio"
                                                                                                    class="ng-pristine ng-untouched ng-valid ng-empty"
                                                                                                    name="3940">
                                                                                                <span
                                                                                                    class="checkbox-replacement-helper"></span>
                                                                                                Any hours
                                                                                            </label>
                                                                                        </div>

                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input type="radio"
                                                                                                    class="ng-pristine ng-untouched ng-valid ng-empty"
                                                                                                    name="3943"
                                                                                                    value="1">
                                                                                                <span
                                                                                                    class="checkbox-replacement-helper"></span>
                                                                                                1+ hours billed
                                                                                            </label>
                                                                                        </div>

                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input type="radio"
                                                                                                    class="ng-pristine ng-untouched ng-valid ng-empty"
                                                                                                    name="3946"
                                                                                                    value="100">
                                                                                                <span
                                                                                                    class="checkbox-replacement-helper"></span>
                                                                                                100+ hours billed
                                                                                            </label>
                                                                                        </div>

                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input type="radio"
                                                                                                    class="ng-pristine ng-untouched ng-valid ng-empty"
                                                                                                    name="3949"
                                                                                                    value="1000">
                                                                                                <span
                                                                                                    class="checkbox-replacement-helper"></span>
                                                                                                1,000+ hours billed
                                                                                            </label>
                                                                                        </div>

                                                                                    </div>
                                                                                </facet-input-radio-list>
                                                                                <facet-input-checkbox
                                                                                    data-facet-name="rhrs">
                                                                                    <div
                                                                                        class="checkbox m-xs-top ng-hide">
                                                                                        <label>
                                                                                            <input type="checkbox"
                                                                                                class="ng-pristine ng-untouched ng-valid ng-empty">
                                                                                            <span
                                                                                                class="checkbox-replacement-helper">
                                                                                                <span
                                                                                                    class="glyphicon air-icon-check"></span>
                                                                                            </span>
                                                                                            <ng-transclude>
                                                                                                <small>Within last 6
                                                                                                    months
                                                                                                    only</small>
                                                                                            </ng-transclude>
                                                                                        </label> </div>
                                                                                </facet-input-checkbox>
                                                                            </ng-transclude>
                                                                        </div>
                                                                    </div>
                                                                    <div class="ng-hide">
                                                                        <div class="in" style="height: auto;">
                                                                            <div class="p-sm-top">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </section>
                                                            </facet-brief-presentation>
                                                            <facet-brief-presentation data-title="English level">
                                                                <section>
                                                                    <label class="title"> English level
                                                                        <a href="javascript:" class="pull-right">
                                                                            <span
                                                                                class="glyphicon m-0-right air-icon-arrow-expand"></span>
                                                                        </a>
                                                                    </label>
                                                                    <div class="collapse" style="height: 0px;">
                                                                        <div class="m-sm-top">
                                                                            <ng-transclude>
                                                                                <facet-input-radio-list>
                                                                                    <div>
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input type="radio"
                                                                                                    class="ng-pristine ng-untouched ng-valid ng-empty"
                                                                                                    name="3969">
                                                                                                <span
                                                                                                    class="checkbox-replacement-helper"></span>
                                                                                                Any level
                                                                                            </label>
                                                                                        </div>

                                                                                        <div class="radio"
                                                                                            data-ng-repeat="listItem in $ctrl.facet.valueList.flatList track by listItem.value">
                                                                                            <label>
                                                                                                <input type="radio"
                                                                                                    class="ng-pristine ng-untouched ng-valid ng-empty"
                                                                                                    name="3972"
                                                                                                    value="1">
                                                                                                <span
                                                                                                    class="checkbox-replacement-helper"></span>Basic
                                                                                            </label>
                                                                                        </div>

                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input type="radio"
                                                                                                    class="ng-pristine ng-untouched ng-valid ng-empty"
                                                                                                    name="3975"
                                                                                                    value="2">

                                                                                                <span
                                                                                                    class="checkbox-replacement-helper"></span>Conversational
                                                                                            </label>
                                                                                        </div>

                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input type="radio"
                                                                                                    class="ng-pristine ng-untouched ng-valid ng-empty"
                                                                                                    name="3978"
                                                                                                    value="3">
                                                                                                <span
                                                                                                    class="checkbox-replacement-helper"></span>Fluent
                                                                                            </label>
                                                                                        </div>

                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input type="radio"
                                                                                                    class="ng-pristine ng-untouched ng-valid ng-empty"
                                                                                                    name="3981"
                                                                                                    value="4">
                                                                                                <span
                                                                                                    class="checkbox-replacement-helper"></span>
                                                                                                Native or bilingual
                                                                                            </label>
                                                                                        </div>

                                                                                    </div>
                                                                                </facet-input-radio-list>
                                                                            </ng-transclude>
                                                                        </div>
                                                                    </div>
                                                                    <div class="ng-hide">
                                                                        <div class="in" style="height: auto;">
                                                                            <div class="p-sm-top">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </section>
                                                            </facet-brief-presentation>
                                                            <facet-brief-presentation data-title="Other languages">
                                                                <section class="">
                                                                    <label class="title"> Other languages
                                                                        <a href="javascript:" class="pull-right">
                                                                            <span
                                                                                class="glyphicon m-0-right air-icon-arrow-expand"></span>
                                                                        </a>
                                                                    </label>
                                                                    <div class="collapse" style="height: 0px;">
                                                                        <div class="m-sm-top">
                                                                            <ng-transclude>
                                                                                <facet-input-suggestion-list>
                                                                                    <div class="facet-input-suggestion-list">
                                                                                        <label
                                                                                            class="d-block m-xs-bottom sr-only">
                                                                                            Search </label>
                                                                                        <up-c-dropdown-search
                                                                                            class="sc-up-c-dropdown-search-h sc-up-c-dropdown-search-s is-fullscreen hydrated">
                                                                                            <div class="up-c-dropdown-search sc-up-c-dropdown-search">
                                                                                                <up-c-on-media-change class="sc-up-c-dropdown-search hydrated">
                                                                                                    <up-c-on-click-outside
                                                                                                        class="sc-up-c-dropdown-search hydrated">
                                                                                                        <up-c-transition page-title="Search languages" class="sc-up-c-dropdown-search hydrated">
                                                                                                            <div class="btn-group dropdown sc-up-c-dropdown-search">
                                                                                                                <button class="btn btn-default dropdown-toggle sc-up-c-dropdown-search" type="button">
                                                                                                                    <span class="ellipsis sc-up-c-dropdown-search">Search languages</span>
                                                                                                                    <up-c-icon class="sc-up-c-dropdown-search glyph-icon hydrated">
                                                                                                                        <span class="sr-only">
                                                                                                                            <slot-fb>
                                                                                                                                Toggle
                                                                                                                                dropdown
                                                                                                                                expand
                                                                                                                            </slot-fb>
                                                                                                                        </span>
                                                                                                                        <up-c-load-svg class="hydrated">
                                                                                                                        </up-c-load-svg>
                                                                                                                        <span class="caret glyphicon air-icon-arrow-expand"> </span>
                                                                                                                    </up-c-icon>
                                                                                                                </button>
                                                                                                                <ul class="dropdown-menu transition-content sc-up-c-dropdown-search">
                                                                                                                    <li class="sc-up-c-dropdown-search">
                                                                                                                        <form class="sc-up-c-dropdown-search">
                                                                                                                            <div class="input-group input-group-search sc-up-c-dropdown-search">
                                                                                                                                <label class="input-group-addon sc-up-c-dropdown-search sc-up-c-dropdown-search-s">
                                                                                                                                    <slot-fb name="addon-icon" class="sc-up-c-dropdown-search">
                                                                                                                                        <up-c-icon class="d-flex align-items-center sc-up-c-dropdown-search glyph-icon hydrated">
                                                                                                                                            <span class="sr-only">
                                                                                                                                                <slot-fb>
                                                                                                                                                    Search
                                                                                                                                                </slot-fb>
                                                                                                                                            </span>
                                                                                                                                            <up-c-load-svg class="hydrated">
                                                                                                                                            </up-c-load-svg>
                                                                                                                                            <span class="glyphicon air-icon-search" aria-hidden="true"></span>
                                                                                                                                        </up-c-icon>
                                                                                                                                    </slot-fb>
                                                                                                                                </label>
                                                                                                                                <input class="form-control sc-up-c-dropdown-search"
                                                                                                                                    type="search"
                                                                                                                                    placeholder="">
                                                                                                                            </div>
                                                                                                                        </form>
                                                                                                                    </li>
                                                                                                                    <li
                                                                                                                        class="active sc-up-c-dropdown-search">
                                                                                                                        <a href="javascript:"
                                                                                                                            class="sc-up-c-dropdown-search">Afrikaans</a>
                                                                                                                    </li>
                                                                                                                    <li
                                                                                                                        class="sc-up-c-dropdown-search">
                                                                                                                        <a href="javascript:"
                                                                                                                            class="sc-up-c-dropdown-search">Albanian</a>
                                                                                                                    </li>
                                                                                                                    <li
                                                                                                                        class="sc-up-c-dropdown-search">
                                                                                                                        <a href="javascript:"
                                                                                                                            class="sc-up-c-dropdown-search">Amharic</a>
                                                                                                                    </li>
                                                                                                                    <li
                                                                                                                        class="sc-up-c-dropdown-search">
                                                                                                                        <a href="javascript:"
                                                                                                                            class="sc-up-c-dropdown-search">Arabic</a>
                                                                                                                    </li>
                                                                                                                    <li
                                                                                                                        class="sc-up-c-dropdown-search">
                                                                                                                        <a href="javascript:"
                                                                                                                            class="sc-up-c-dropdown-search">Armenian</a>
                                                                                                                    </li>
                                                                                                                    <li
                                                                                                                        class="sc-up-c-dropdown-search">
                                                                                                                        <a href="javascript:"
                                                                                                                            class="sc-up-c-dropdown-search">Assamese</a>
                                                                                                                    </li>
                                                                                                                    <li
                                                                                                                        class="sc-up-c-dropdown-search">
                                                                                                                        <a href="javascript:"
                                                                                                                            class="sc-up-c-dropdown-search">Azerbaijani</a>
                                                                                                                    </li>
                                                                                                                    <li
                                                                                                                        class="sc-up-c-dropdown-search">
                                                                                                                        <a href="javascript:"
                                                                                                                            class="sc-up-c-dropdown-search">Basque</a>
                                                                                                                    </li>

                                                                                                                    <li
                                                                                                                        class="sc-up-c-dropdown-search">
                                                                                                                        <a href="javascript:"
                                                                                                                            class="sc-up-c-dropdown-search">Slovene</a>
                                                                                                                    </li>
                                                                                                                    <li
                                                                                                                        class="sc-up-c-dropdown-search">
                                                                                                                        <a href="javascript:"
                                                                                                                            class="sc-up-c-dropdown-search">Somali</a>
                                                                                                                    </li>
                                                                                                                    <li
                                                                                                                        class="sc-up-c-dropdown-search">
                                                                                                                        <a href="javascript:"
                                                                                                                            class="sc-up-c-dropdown-search">Spanish</a>
                                                                                                                    </li>
                                                                                                                    <li
                                                                                                                        class="sc-up-c-dropdown-search">
                                                                                                                        <a href="javascript:"
                                                                                                                            class="sc-up-c-dropdown-search">Swahili</a>
                                                                                                                    </li>
                                                                                                                    <li
                                                                                                                        class="sc-up-c-dropdown-search">
                                                                                                                        <a href="javascript:"
                                                                                                                            class="sc-up-c-dropdown-search">Swedish</a>
                                                                                                                    </li>
                                                                                                                    <li
                                                                                                                        class="sc-up-c-dropdown-search">
                                                                                                                        <a href="javascript:"
                                                                                                                            class="sc-up-c-dropdown-search">Tagalog</a>
                                                                                                                    </li>
                                                                                                                    <li
                                                                                                                        class="sc-up-c-dropdown-search">
                                                                                                                        <a href="javascript:"
                                                                                                                            class="sc-up-c-dropdown-search">Tagalog</a>
                                                                                                                    </li>
                                                                                                                    <li
                                                                                                                        class="sc-up-c-dropdown-search">
                                                                                                                        <a href="javascript:"
                                                                                                                            class="sc-up-c-dropdown-search">Tamil</a>
                                                                                                                    </li>
                                                                                                                    <li
                                                                                                                        class="sc-up-c-dropdown-search">
                                                                                                                        <a href="javascript:"
                                                                                                                            class="sc-up-c-dropdown-search">Telugu</a>
                                                                                                                    </li>
                                                                                                                    <li
                                                                                                                        class="sc-up-c-dropdown-search">
                                                                                                                        <a href="javascript:"
                                                                                                                            class="sc-up-c-dropdown-search">Thai</a>
                                                                                                                    </li>
                                                                                                                    <li
                                                                                                                        class="sc-up-c-dropdown-search">
                                                                                                                        <a href="javascript:"
                                                                                                                            class="sc-up-c-dropdown-search">Tigrinya</a>
                                                                                                                    </li>
                                                                                                                    <li
                                                                                                                        class="sc-up-c-dropdown-search">
                                                                                                                        <a href="javascript:"
                                                                                                                            class="sc-up-c-dropdown-search">Turkish</a>
                                                                                                                    </li>
                                                                                                                    <li
                                                                                                                        class="sc-up-c-dropdown-search">
                                                                                                                        <a href="javascript:"
                                                                                                                            class="sc-up-c-dropdown-search">Ukrainian</a>
                                                                                                                    </li>
                                                                                                                    <li
                                                                                                                        class="sc-up-c-dropdown-search">
                                                                                                                        <a href="javascript:"
                                                                                                                            class="sc-up-c-dropdown-search">Urdu</a>
                                                                                                                    </li>
                                                                                                                    <li
                                                                                                                        class="sc-up-c-dropdown-search">
                                                                                                                        <a href="javascript:"
                                                                                                                            class="sc-up-c-dropdown-search">Uzbek</a>
                                                                                                                    </li>
                                                                                                                    <li
                                                                                                                        class="sc-up-c-dropdown-search">
                                                                                                                        <a href="javascript:"
                                                                                                                            class="sc-up-c-dropdown-search">Vietnamese</a>
                                                                                                                    </li>
                                                                                                                    <li
                                                                                                                        class="sc-up-c-dropdown-search">
                                                                                                                        <a href="javascript:"
                                                                                                                            class="sc-up-c-dropdown-search">Yiddish</a>
                                                                                                                    </li>
                                                                                                                    <li
                                                                                                                        class="hidden sc-up-c-dropdown-search sc-up-c-dropdown-search-s">
                                                                                                                        <slot-fb
                                                                                                                            name="no-results"
                                                                                                                            class="sc-up-c-dropdown-search">
                                                                                                                            <span
                                                                                                                                class="d-flex align-items-center ml-10 py-10 sc-up-c-dropdown-search">
                                                                                                                                <up-c-icon
                                                                                                                                    class="ml-5 mr-10 text-muted sc-up-c-dropdown-search hydrated">
                                                                                                                                    <span
                                                                                                                                        class="sr-only">
                                                                                                                                        <slot-fb>
                                                                                                                                            No
                                                                                                                                            results
                                                                                                                                            found
                                                                                                                                        </slot-fb>
                                                                                                                                    </span>
                                                                                                                                    <up-c-load-svg
                                                                                                                                        class="hydrated">
                                                                                                                                    </up-c-load-svg>
                                                                                                                                </up-c-icon>
                                                                                                                                <span
                                                                                                                                    class="text-muted sc-up-c-dropdown-search">No
                                                                                                                                    results
                                                                                                                                    found</span>
                                                                                                                            </span>
                                                                                                                        </slot-fb>
                                                                                                                    </li>
                                                                                                                </ul>
                                                                                                            </div>
                                                                                                        </up-c-transition>
                                                                                                    </up-c-on-click-outside>
                                                                                                    <up-c-fullscreen
                                                                                                        class="sc-up-c-dropdown-search hydrated">
                                                                                                    </up-c-fullscreen>
                                                                                                </up-c-on-media-change>
                                                                                            </div>
                                                                                        </up-c-dropdown-search>
                                                                                        <ng-transclude>
                                                                                        </ng-transclude>
                                                                                        <div class="checkbox m-md-top">
                                                                                            <label>
                                                                                                <input type="checkbox"
                                                                                                    class="ng-pristine ng-untouched ng-valid ng-empty">
                                                                                                <span
                                                                                                    class="checkbox-replacement-helper">
                                                                                                    <span
                                                                                                        aria-hidden="true"
                                                                                                        class="glyphicon air-icon-check"></span>
                                                                                                </span>
                                                                                                Any language
                                                                                            </label> </div>

                                                                                    </div>
                                                                                </facet-input-suggestion-list>
                                                                            </ng-transclude>
                                                                        </div>
                                                                    </div>
                                                                    <div>
                                                                        <div class="in" style="height: auto;">
                                                                            <div class="p-sm-top">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </section>
                                                            </facet-brief-presentation>
                                                            <facet-brief-presentation>
                                                                <section>
                                                                    <label class="title">
                                                                        Talent clouds
                                                                        <a href="javascript:" class="pull-right">
                                                                            <span
                                                                                class="glyphicon m-0-right air-icon-arrow-expand"></span>
                                                                        </a>
                                                                    </label>
                                                                    <div class="collapse" style="height: 0px;">
                                                                        <div class="m-sm-top">
                                                                            <ng-transclude>
                                                                                <facet-input-suggestion-list>
                                                                                    <div
                                                                                        class="facet-input-suggestion-list ng-hide">
                                                                                        <label class="d-block m-xs-bottom sr-only"> Search </label>
                                                                                        <up-c-dropdown-search
                                                                                            class="sc-up-c-dropdown-search-h sc-up-c-dropdown-search-s is-fullscreen hydrated">
                                                                                            <div
                                                                                                class="up-c-dropdown-search sc-up-c-dropdown-search">
                                                                                                <up-c-on-media-change
                                                                                                    class="sc-up-c-dropdown-search hydrated">
                                                                                                    <up-c-on-click-outside
                                                                                                        class="sc-up-c-dropdown-search hydrated">
                                                                                                        <up-c-transition
                                                                                                            page-title="Search talent clouds"
                                                                                                            transition-type="modal"
                                                                                                            class="sc-up-c-dropdown-search hydrated">
                                                                                                            <div
                                                                                                                class="btn-group dropdown sc-up-c-dropdown-search">
                                                                                                                <button
                                                                                                                    class="btn btn-default dropdown-toggle sc-up-c-dropdown-search"
                                                                                                                    type="button">
                                                                                                                    <span
                                                                                                                        class="ellipsis sc-up-c-dropdown-search">Search
                                                                                                                        talent
                                                                                                                        clouds</span>
                                                                                                                    <up-c-icon
                                                                                                                        class="sc-up-c-dropdown-search glyph-icon hydrated"
                                                                                                                        size="">
                                                                                                                        <span
                                                                                                                            class="sr-only">
                                                                                                                            <slot-fb>
                                                                                                                                Toggle
                                                                                                                                dropdown
                                                                                                                                expand
                                                                                                                            </slot-fb>
                                                                                                                        </span>
                                                                                                                        <up-c-load-svg
                                                                                                                            class="hydrated">
                                                                                                                        </up-c-load-svg>
                                                                                                                        <span
                                                                                                                            class="caret glyphicon air-icon-arrow-expand"></span>
                                                                                                                    </up-c-icon>
                                                                                                                </button>
                                                                                                                <ul
                                                                                                                    class="dropdown-menu transition-content sc-up-c-dropdown-search">
                                                                                                                    <li
                                                                                                                        class="sc-up-c-dropdown-search">
                                                                                                                        <form
                                                                                                                            class="sc-up-c-dropdown-search">
                                                                                                                            <div
                                                                                                                                class="input-group input-group-search sc-up-c-dropdown-search">
                                                                                                                                <label
                                                                                                                                    class="input-group-addon sc-up-c-dropdown-search sc-up-c-dropdown-search-s">
                                                                                                                                    <slot-fb
                                                                                                                                        name="addon-icon"
                                                                                                                                        class="sc-up-c-dropdown-search">
                                                                                                                                        <up-c-icon
                                                                                                                                            class="d-flex align-items-center sc-up-c-dropdown-search glyph-icon hydrated"
                                                                                                                                            size="">
                                                                                                                                            <span
                                                                                                                                                class="sr-only">
                                                                                                                                                <slot-fb>
                                                                                                                                                    Search
                                                                                                                                                </slot-fb>
                                                                                                                                            </span>
                                                                                                                                            <up-c-load-svg
                                                                                                                                                class="hydrated">
                                                                                                                                            </up-c-load-svg>
                                                                                                                                            <span
                                                                                                                                                class="glyphicon air-icon-search"></span>
                                                                                                                                        </up-c-icon>
                                                                                                                                    </slot-fb>
                                                                                                                                </label>
                                                                                                                                <input
                                                                                                                                    class="form-control sc-up-c-dropdown-search"
                                                                                                                                    type="search"
                                                                                                                                    placeholder="">
                                                                                                                            </div>
                                                                                                                        </form>
                                                                                                                    </li>
                                                                                                                    <li
                                                                                                                        class="hidden sc-up-c-dropdown-search sc-up-c-dropdown-search-s">
                                                                                                                        <slot-fb
                                                                                                                            name="no-results"
                                                                                                                            class="sc-up-c-dropdown-search">
                                                                                                                            <span
                                                                                                                                class="d-flex align-items-center ml-10 py-10 sc-up-c-dropdown-search">
                                                                                                                                <up-c-icon
                                                                                                                                    class="ml-5 mr-10 text-muted sc-up-c-dropdown-search hydrated"
                                                                                                                                    size="">
                                                                                                                                    <span
                                                                                                                                        class="sr-only">
                                                                                                                                        <slot-fb>
                                                                                                                                            No
                                                                                                                                            results
                                                                                                                                            found
                                                                                                                                        </slot-fb>
                                                                                                                                    </span>
                                                                                                                                    <up-c-load-svg
                                                                                                                                        class="hydrated">
                                                                                                                                    </up-c-load-svg>
                                                                                                                                </up-c-icon>
                                                                                                                                <span
                                                                                                                                    class="text-muted sc-up-c-dropdown-search">No
                                                                                                                                    results
                                                                                                                                    found</span>
                                                                                                                            </span>
                                                                                                                        </slot-fb>
                                                                                                                    </li>
                                                                                                                </ul>
                                                                                                            </div>
                                                                                                        </up-c-transition>
                                                                                                    </up-c-on-click-outside>
                                                                                                    <up-c-fullscreen
                                                                                                        class="sc-up-c-dropdown-search hydrated">
                                                                                                    </up-c-fullscreen>
                                                                                                </up-c-on-media-change>
                                                                                            </div>
                                                                                        </up-c-dropdown-search>
                                                                                        <ng-transclude>
                                                                                        </ng-transclude>
                                                                                        <div
                                                                                            class="checkbox m-md-top ng-hide">
                                                                                            <label>
                                                                                                <input type="checkbox"
                                                                                                    class="ng-pristine ng-untouched ng-valid ng-empty">
                                                                                                <span
                                                                                                    class="checkbox-replacement-helper"><span
                                                                                                        class="glyphicon air-icon-check"></span></span>
                                                                                                Any talent cloud
                                                                                            </label>
                                                                                        </div>

                                                                                    </div>
                                                                                </facet-input-suggestion-list>
                                                                            </ng-transclude>
                                                                        </div>
                                                                    </div>
                                                                    <div class="ng-hide">
                                                                        <div class="in" style="height: auto;">
                                                                            <div class="p-sm-top">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </section>
                                                            </facet-brief-presentation>
                                                        </div>
                                                    </form>
                                                </ng-include>
                                            </ng-transclude>
                                        </facet-container>
                                    </facet-panel-template>
                                </ng-transclude>
                            </div>

                        </cfe-responsive-panel>

                    </facet-left-panel>
                </sidebar-search-filters-panel>
            </div>
            <div class="height-100-mobile-app col-lg-12">
                <div class="height-100-mobile-app">
                    <div class="ats-search responsive-container height-100-mobile-app">
                        <div class="n-card p-0-top-bottom m-0-top-bottom height-100-mobile-app">
                            <section class="n-card-section nav-tabs-container d-none-mobile-app">
                                <ul class="nav nav-tabs m-0-bottom">
                                    <li class="card-tabs m-md-left">
                                        <a href="/ab/profiles/search/">搜索人才</a>
                                    </li>
                                    <li>
                                        <a href="/ab/profiles/search/hires">已雇佣</a>
                                    </li>
                                    <li class="active">
                                        <a href="/ab/profiles/search/saved">已保存 <span class="d-none d-sm-inline">(3)</span></a>
                                    </li>
                                </ul>
                            </section>

                            <div class="tab-content">
                                    <div class="tab-pane active">
                                        <div class="m-0-top-bottom p-0-top-bottom">
                                            <header class="clearfix saved-filter-container">
                                                <div class="form-group col-xs-12 col-md-10 col-lg-8 m-0-bottom p-0-left-right">
                                                    <div class="input-group input-group-search input">
                                                        <form class="form" action="">
                                                            <input type="search" id="search-box-el-saved"
                                                                class="form-control freelancer-block--search-input with-border"
                                                                placeholder="搜索已保存的人才" name="textInput">
                                                        </form>
                                                        <!--<small class="text-muted d-none d-lg-inline">搜索姓名或标题</small>-->
                                                        <label class="input-group-btn" for="search-box-el-saved">
                                                            <div class="button p-sm-left-right m-0 freelancer-block--button">
                                                                <i class="icon-material-outline-search"></i>
                                                                <!-- <span class="sr-only">Search freelancers</span> -->
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>

                                            </header>

                                            <div>
                                                <section class="n-card-section n-card-hover n-card-hover-escape tile-n-card ">
                                                    <div>
                                                        <div class="media stacked-media">
                                                            <div class="media-body">
                                                                <div>
                                                                    <div class="row">
                                                                        <div class="col-xs-2 col-sm-1">
                                                                            <div class="row">
                                                                                <div class="col-xs-12 p-0-right">
                                                                                    <div class="avatar-column">
                                                                                                <a title="Mrugesh P." class="user-avatar user-avatar-60 status-online avatar-responsive" href="/freelancers/~0147d46382dc1e37f0">
                                                                                                    <img alt="Mrugesh P.'s avatar" class="vertical-align-middle m-0"
                                                                                                        src="/themes/default/assets/images/user-avatar-small-01.jpg">
                                                                                                </a>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div
                                                                            class="col-xs-10 col-sm-11 p-md-left-sm-md p-md-left-xs-sm pl-md-30 pl-lg-10">
                                                                            <div class="tile-flex-col">
                                                                                <div class="tile-name-col">
                                                                                    <div class="m-0-top-bottom display-inline-block">
                                                                                        <a class="freelancer-tile-name" title="Mrugesh P." href="/freelancers/~0147d46382dc1e37f0">
                                                                                            <span>Mrugesh P.</span>
                                                                                        </a>
                                                                                    </div>
                                                                                    <div class="m-0-top-bottom">
                                                                                        <div>
                                                                                            <div>
                                                                                                <div class="ellipsis freelancer-tile-title_compact d-none d-md-block">
                                                                                                    <strong>Expert
                                                                                                        developer
                                                                                                        in
                                                                                                        .Net,
                                                                                                        PHP,
                                                                                                        iOS
                                                                                                        and
                                                                                                        Android</strong>

                                                                                                </div>
                                                                                                <div class="d-md-none freelancer-tile-title_compact">
                                                                                                    <strong>
                                                                                                        Expert
                                                                                                        developer
                                                                                                        in
                                                                                                        .Net,
                                                                                                        PHP,
                                                                                                        iOS
                                                                                                        and
                                                                                                        Android
                                                                                                    </strong>

                                                                                                </div>
                                                                                            </div>

                                                                                        </div>
                                                                                    </div>
                                                                                </div>

                                                                                <div class="m-sm-left">
                                                                                    <div>
                                                                                        <div class="d-flex pull-right ats-tile-buttons">
                                                                                            <div>
                                                                                                <div>
                                                                                                    <button class="eo-button-save button button-white active button-circle button-sm">
                                                                                                        <span class="glyphicon m-0-left air-icon-favorite-activated"></span>
                                                                                                    </button>
                                                                                                </div>
                                                                                            </div>

                                                                                            <div class="d-none d-md-block">
                                                                                                <div>
                                                                                                    <button class="button button-block button-sm tile-button">
                                                                                                        <span>工作邀请</span>
                                                                                                    </button>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div
                                                                            class="col-xs-12 m-sm-bottom offset-md-1 col-md-11 p-md-left-sm-md">
                                                                            <div class="row m-sm-top">
                                                                                <div class="col-xs-6 p-0-right col-md-3">
                                                                                    <div>
                                                                                        <strong class="pull-left">$25.00</strong>
                                                                                        <span class="pull-left text-muted">
                                                                                            <span class="d-none d-lg-inline-block">&nbsp;/hr</span>
                                                                                            <span class="d-lg-none">/hr</span>
                                                                                        </span>

                                                                                    </div>
                                                                                </div>

                                                                                <div class="col-xs-6 col-md-3">
                                                                                    <div>
                                                                                        <span class="d-none d-lg-inline">
                                                                                            <strong>$10k+</strong>
                                                                                            <span class="text-muted m-xs-left">收入</span>
                                                                                        </span>
                                                                                        <span class="d-lg-none">
                                                                                            <strong>$10k+</strong>
                                                                                            <span class="text-muted m-xs-left">收入</span>
                                                                                        </span>
                                                                                    </div>
                                                                                </div>


                                                                                <div class="col-xs-6 col-md-3 m-sm-top-sm p-0-right">
                                                                                    <div class="d-flex jss-section">
                                                                                        <div class="flex-grow-1 clearfix">
                                                                                            <div class="d-none d-lg-block">
                                                                                                <div class="p-0 col-md-12">
                                                                                                    <div>
                                                                                                        <div class="overflow-hidden">
                                                                                                            <span>
                                                                                                                <div class="progress-sm">
                                                                                                                    <div class="progress-bar progress-bar-complimentary" style="width: 70%;">
                                                                                                                        <span>85%<span class="progress-bar-text">工作成功率</span></span>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </span>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="d-lg-none">
                                                                                                <div class="p-0 col-xs-12">
                                                                                                    <div class="progress-sm jss-search-selector">
                                                                                                        <div class="progress-bar progress-bar-complimentary" style="width: 70%;">
                                                                                                            <span>85%</span>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>

                                                                                            </div>
                                                                                        </div>

                                                                                    </div>

                                                                                </div>

                                                                                <div class="col-xs-6 col-md-3 m-sm-top-sm">
                                                                                    <div>
                                                                                        <div class="d-flex freelancer-tile-location">
                                                                                            <strong title="India">India</strong>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                            <div class="row m-sm-top m-0-bottom">
                                                                                <div class="col-xs-12">
                                                                                    <div>
                                                                                        <p class="p-0-left m-0 freelancer-tile-description">
                                                                                            I have
                                                                                            7+ years
                                                                                            of
                                                                                            experience
                                                                                            in
                                                                                            multiple
                                                                                            technologies
                                                                                            in Web
                                                                                            and
                                                                                            Mobile
                                                                                            development
                                                                                            with
                                                                                            delivering
                                                                                            the best
                                                                                            quality
                                                                                            of work.
                                                                                            Following
                                                                                            are the
                                                                                            web
                                                                                            technologies,
                                                                                            programming
                                                                                            languages
                                                                                            and
                                                                                            development
                                                                                            ... </p>

                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            
                                                                            <div class="row"> 
                                                                                <div class="col-xs-12"> 
                                                                                    <div>
                                                                                        <div class="col-md-11 m-sm-top-bottom p-0-left"> 
                                                                                            <recommend-reasons-link>
                                                                                                <span> 
                                                                                                    <strong>Suggested because they worked on </strong>
                                                                                                    <a href="javascript:" class="search-recommended-reasons"> 
                                                                                                        <ng-pluralize>8 jobs that match your search.</ng-pluralize> 
                                                                                                    </a> 
                                                                                                </span>
                                                                                            </recommend-reasons-link> 
                                                                                        </div>
                                                                                    </div> 
                                                                                </div> 
                                                                            </div>

                                                                            <div class="row m-sm-top m-0-bottom skills-tile"> 
                                                                                <div class="col-xs-12"> 
                                                                                    <match-differentiator>
                                                                                        <div class="match-reasons-differentiator"> 
                                                                                            <span class="m-0-left m-xs-right icon-line-awesome-flag-checkered"></span>
                                                                                            Earned $6k on Web Development projects 
                                                                                        </div>
                                                                                    </match-differentiator>
                                                                                </div> 
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-12">
                                                                                    <div>
                                                                                        <div class=" skills-section">
                                                                                            <ul class="skill-list-light">
                                                                                                <li>
                                                                                                    <span class="m-0-top m-sm-bottom o-tag-skill-light">
                                                                                                        <span>
                                                                                                            <span>Microsoft Word</span>
                                                                                                        </span> 
                                                                                                    </span>
                                                                                                    
                                                                                                </li>
                                                                                                
                                                                                                <li>
                                                                                                    <span class="m-0-top m-sm-bottom o-tag-skill-light">
                                                                                                        <span>
                                                                                                            <span>Customer Support</span>
                                                                                                        </span> 
                                                                                                    </span>
                                                                                                </li>
                                                                                                
                                                                                                <li>
                                                                                                    <span class="m-0-top m-sm-bottom o-tag-skill-light">
                                                                                                        <span>
                                                                                                            <span>Microsoft PowerPoint</span>
                                                                                                        </span> 
                                                                                                    </span>
                                                                                                </li>
                                                                                                
                                                                                                <li>
                                                                                                    <span class="m-0-top m-sm-bottom o-tag-skill-light">
                                                                                                        <span>
                                                                                                            <span>Data Entry</span>
                                                                                                        </span> 
                                                                                                    </span>
                                                                                                </li>
                                                                                                <li> 
                                                                                                    <a class="button button-link p-0 m-0" title="5 more" href="/freelancers/~01da5b0a66320d1294">5 more </a> 
                                                                                                </li>
                                                                                            </ul>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row"> 
                                                                                <div class="col-xs-12"> 
                                                                                    <match-reasons-skills>
                                                                                        <div class="tiles-match-skills"> 
                                                                                            <div class="m-sm-bottom"> 
                                                                                                Has <span class="match-skills-count">8 relevant skills</span> to your job 
                                                                                            </div>
                                                                                            <div> 
                                                                                                <ul class="p-0 m-0"> 
                                                                                                    <li class="o-tag-skill ms-sm-bottom vertical-align-middle"> 
                                                                                                        Web Development
                                                                                                        <span class="d-inline-block vertical-align-middle m-xs-left">[Top 5%]</span>
                                                                                                    </li>
                                                                                                    <li class="o-tag-skill ms-sm-bottom vertical-align-middle"> 
                                                                                                        Web &amp; Mobile Design
                                                                                                        <span class="d-inline-block vertical-align-middle m-xs-left">[Top 5%]</span><
                                                                                                    </li>
                                                                                                    <li class="o-tag-skill ms-sm-bottom vertical-align-middle"> 
                                                                                                        WordPress
                                                                                                        <span class="d-inline-block vertical-align-middle m-xs-left">[Top 20%]</span>
                                                                                                    </li>
                                                                                                    <li class="o-tag-skill ms-sm-bottom vertical-align-middle"> 
                                                                                                        HTML5
                                                                                                        <span class="d-inline-block vertical-align-middle m-xs-left">[Top 50%]</span>
                                                                                                    </li>
                                                                                                    <li class="o-tag-skill ms-sm-bottom vertical-align-middle o-tag-skill-extra"> 
                                                                                                        CSS3
                                                                                                        <span class="d-inline-block vertical-align-middle m-xs-left" >[Top 50%]</span>
                                                                                                    </li>
                                                                                                    <li class="o-tag-skill ms-sm-bottom vertical-align-middle o-tag-skill-extra"> 
                                                                                                        JavaScript
                                                                                                        <span class="d-inline-block vertical-align-middle m-xs-left">[Top 50%]</span>
                                                                                                    </li>
                                                                                                    <li class="o-tag-skill ms-sm-bottom vertical-align-middle o-tag-skill-extra"> 
                                                                                                        PHP
                                                                                                        <span class="d-inline-block vertical-align-middle m-xs-left">[Top 50%]</span>
                                                                                                    </li>
                                                                                                    <li class="o-tag-skill ms-sm-bottom vertical-align-middle o-tag-skill-extra"> 
                                                                                                        Ecommerce Development 
                                                                                                    </li>
                                                                                                    <a class="button button-link m-0-bottom p-0-left link-show-more d-none d-md-inline" href="/freelancers/~011c24e6fd2a5e4e5b">4 more </a>
                                                                                                </ul> 
                                                                                            </div>
                                                                                        </div> 
                                                                                    </match-reasons-skills> 
                                                                                </div> 
                                                                            </div>
                                                                            <div class="row m-0-bottom m-sm-top"> 
                                                                                <div class="col-md-10"> 
                                                                                    <div>
                                                                                        <div class="agency-box"> 
                                                                                            <div class="box-container"> 
                                                                                                <a href="/companies/~0187c914d72c1f1736"> 
                                                                                                    <img class="avatar m-10 avatar-30 avatar-company" src="/themes/default/assets/images/Companies_5836834_CompanyLogoURL.jpeg">
                                                                                                </a> 
                                                                                                <div class="box-body my-10 mx-0"> 
                                                                                                    <div class="body-title">Member of this agency</div> 
                                                                                                    <div class="body-link"> 
                                                                                                        <span class="ellipsis">
                                                                                                            <a href="/companies/~0187c914d72c1f1736">Innox</a>
                                                                                                        </span>
                                                                                                    </div> 
                                                                                                </div> 
                                                                                            </div> 
                                                                                        </div>
                                                                                    </div> 
                                                                                </div> 
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-xs-12">
                                                                                    <div>
                                                                                        <saved-freelancer-notes class="d-block saved-freelancer-notes">
                                                                                        </saved-freelancer-notes>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="d-md-none">
                                                                    <div>
                                                                        <div
                                                                            class="d-block d-md-none d-flex m-sm-top-bottom ats-tile-buttons-responsive">
                                                                            <div class="tile-button-flex-fill">
                                                                                <div>
                                                                                    <button class="button button-block button-sm m-0">
                                                                                        <span>工作邀请</span>
                                                                                    </button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </section>
                                            </div>
                                        </div>
                                    </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </search-tab-layout-manager>
</div>