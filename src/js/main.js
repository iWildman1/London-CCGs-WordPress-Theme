var newsGrid = document.querySelector('.news-grid');
var videoContainer = document.querySelector('#video-container');
var modalActive = false;
var modalContainer = document.querySelector('.modal-container');
var body = document.querySelector('body');
var mobileNavHamburger = document.querySelector('.hamburger');
var navigationItemsWithChildren = document.querySelectorAll('.menu-item-has-children');
var matchHeightElements = document.querySelectorAll('.match-height-parent');
var filterToggle = document.querySelector('.filter-toggle');

var mobileNavOpen = false;

if (modalContainer) {
    modalContainer.addEventListener('click', function() {
        if (modalActive = true) {
            modalContainer.classList.remove('modal-active');
            modalContainer.classList.add('modal-out');
            body.classList.remove('no-overflow');
            modalActive = false;
        }
    });
}

if (newsGrid) {
    imagesLoaded(newsGrid, function() {
        msnry = new Masonry(newsGrid, {
            itemSelector: '.news-item-col',
            percentagePosition: true,
            columnWidth: '.news-item-col',
            gutter: 10
        })
    })
}

if (videoContainer) {
    document.addEventListener('keyup', function(e){
       if (e.which == 27 && modalActive) {
           modalContainer.click();
       }
    });

    imagesLoaded(videoContainer, function() {
        var playBtn = document.querySelector('#homePlayBtn');
        playBtn.addEventListener('click', function() {
            var modalBox = document.querySelector('.modal-box');

            if (!modalActive) {
                modalContainer.classList.add('modal-active');
                modalContainer.classList.remove('modal-out');
                body.classList.add('no-overflow');
                modalActive = true;
            }
        });
    })
}

if (mobileNavHamburger) {
    mobileNavHamburger.addEventListener('click', function() {
        var mobileNavigation = document.querySelector('.navigation-items');

        if (!mobileNavOpen) {
            mobileNavHamburger.classList.add('is-active');
            mobileNavigation.classList.add('mobile-nav-active');

            mobileNavOpen = true;
        } else {
            mobileNavHamburger.classList.remove('is-active');
            mobileNavigation.classList.remove('mobile-nav-active');

            mobileNavOpen = false;
        }
    })
}

if (navigationItemsWithChildren) {
    for (var i = 0; i < navigationItemsWithChildren.length; i++) {
        navigationItemsWithChildren[i].addEventListener('click', function() {
            if (mobileNavOpen) {
                var targetSubMenu = this.getElementsByClassName('sub-menu');

                var allSubMenus = document.querySelectorAll('.sub-menu');
                for (var i = 0; i < allSubMenus.length; i++) {
                    allSubMenus[i].classList.remove('sub-menu-active')
                }

                targetSubMenu[0].classList.add('sub-menu-active');
            }
        })
    }
}

if (matchHeightElements) {
    imagesLoaded(matchHeightElements, function() {
        for (var i = 0; i < matchHeightElements.length; i++) {
            var matchHeightTargets = matchHeightElements[i].querySelectorAll('.match-height-child');
            var largestHeight = 0;

            for (var j = 0; j < matchHeightTargets.length; j++) {
                if (matchHeightTargets[j].clientHeight > largestHeight) {
                    largestHeight = matchHeightTargets[j].clientHeight;
                }
            }

            for (var j = 0; j < matchHeightTargets.length; j++) {
                matchHeightTargets[j].style.height = largestHeight + "px";
            }
        }
    })
}

if (filterToggle) {
    filterToggle.addEventListener('click', function() {
        var filterList = document.querySelector('.filter-list');
        if (filterList.classList.contains('filter-toggle-active')) {
            var filtersActive = true;
        } else {
            filtersActive = false;
        }

        if (!filtersActive) {
            filterList.classList.add('filter-toggle-active');
        } else {
            filterList.classList.remove('filter-toggle-active');
        }
    })
}