!function() {
    var a = function() {
        "use strict";
        var a, b = function(a) {
            {
                var b, c = "", d = _.escape;
                Array.prototype.join
            }
            return c += '<div class="info_window map-block info-window"><p class="result-name text-overflow" title="' + d(a.name) + '">' + d(a.name) + '</p><p class="result-address text-overflow" title="' + d(a.addr) + '">' + d(a.addr) + '</p><p class="result-nearby">', c += a.count > 0 ? '附近有 <span class="highlight">' + (null == (b = a.count) ? "" : b) + "</span> 家外卖餐厅" : "附近没有外卖餐厅", c += '</p><a class="iw-btn ', 0 === a.count && (c += "ui_disabled"), c += '" href="', a.count > 0 && (c += null == (b = a.url) ? "" : b), c += '" target="_blank">', c += a.count > 0 ? "查看餐厅" : "努力覆盖中", c += "</a></div>"
        };
        return a = b
    }(), b = function() {
        "use strict";
        var a, b = function(a) {
            {
                var b, c = "";
                _.escape, Array.prototype.join
            }
            return c += '<div class="map-marker ui_' + (null == (b = a.order) ? "" : b) + " ", "current" === a.type && (c += "ui_active"), c += '"></div>'
        };
        return a = b
    }(), c = function() {
        "use strict";
        var a, b = function(a) {
            {
                var b, c = "";
                _.escape, Array.prototype.join
            }
            return c += '<div class="result-block"><div class="marker ui_' + (null == (b = a.order) ? "" : b) + '"></div><p class="result-name">' + (null == (b = a.name) ? "" : b) + '</p><p class="result-address">' + (null == (b = a.addr) ? "" : b) + '</p><p class="result-nearby">', c += a.count > 0 ? '附近有<span class="highlight">' + (null == (b = a.count) ? "" : b) + "</span>家餐厅" : "附近没有外卖餐厅", c += "</p></div>"
        };
        return a = b
    }(), d = function(a, b, c) {
        "use strict";
        function d(a, b) {
            b.order = b.id % 10 + 1, this.id = i++, this.map = a, this.parentView = this.$item = this.$infoWindow = this.marker = this.infoWindow = null, this.info = b, this.selected = !1, this.init()
        }
        var e, f = a, g = c, h = {paginationSelector: ".result_pagination", markerSize: {w: 23, h: 35}, mapSprites: "images/map-sprites.png", infoWindowSize: new qq.maps.Size(300, 164), searchBarHeight: $(".map_search").height(), resultBarWidth: $(".result_wrap").width()}, i = 1;
        return d.prototype.init = function() {
            this.buildMarker(), this.buildInfoWindow(), this.buildListItem(), this.bindEvents()
        }, d.getIcon = function(a, b) {
            return new qq.maps.MarkerImage(h.mapSprites, new qq.maps.Size(24, 40), new qq.maps.Point(30 * (b - 1), "normal" === a ? 0 : 40), new qq.maps.Point(12, 32))
        }, d.prototype.bindEvents = function() {
            var a = $.proxy(this.select, this), b = $.proxy(this.focusMarker, this), c = $.proxy(this.blurMarker, this);
            qq.maps.event.addListener(this.marker, "click", a), qq.maps.event.addListener(this.marker, "mouseover", b), qq.maps.event.addListener(this.marker, "mouseout", c), this.$item.on({click: a, mouseenter: b, mouseleave: c})
        }, d.prototype.buildMarker = function() {
            this.marker = new qq.maps.Marker({map: this.map, position: new qq.maps.LatLng(this.info.lat, this.info.lng), draggable: !1, visible: !1, icon: d.getIcon("normal", this.info.order)})
        }, d.prototype.buildInfoWindow = function() {
            this.info.url = ELEME.baseUrl + "ajax.php?act=getShopsLists&lng=" + this.info.lng + "&lat=" + this.info.lat, this.$infoWindow = $(f(this.info)), this.infoWindow = new qq.maps.InfoWindow({map: this.map, size: h.infoWindowSize, content: this.$infoWindow[0], position: this.marker})
        }, d.prototype.buildListItem = function() {
            this.$item = $(g(this.info))
        }, d.prototype.destroy = function() {
            this.$item.remove(), this.$item = null, this.marker.setMap(null), this.marker = null, this.infoWindow && this.infoWindow.close(), this.$infoWindow = null, this.infoWindow = null, this.info = null
        }, d.prototype.show = function() {
            this.$item.insertBefore(h.paginationSelector), this.marker.setVisible(!0)
        }, d.prototype.hide = function() {
            this.selected = !1, this.$item.detach(), this.marker.setVisible(!1), this.infoWindow.close()
        }, d.prototype.select = function() {
            if (!this.selected) {
                this.parentView.controller.closeSelectedItem(), this.selected = !0, this.focusMarker(), this.infoWindow.open();
                var a = this.map.fromLatLngToPoint(this.marker.getPosition());
                a.y -= h.infoWindowSize.getHeight(), a.y += h.searchBarHeight / 2, a.x -= h.resultBarWidth / 2, this.map.panTo(this.map.fromPointToLatLng(a))
            }
        }, d.prototype.unselect = function() {
            this.selected && (this.selected = !1, this.$item.removeClass("ui_current"), this.blurMarker(), this.infoWindow.close())
        }, d.prototype.focusMarker = function(a) {
            this.selected || (this.marker.setIcon(d.getIcon("current", this.info.order)), this.marker.setZIndex(a ? 200 : 100), this.$item.addClass("ui_current"))
        }, d.prototype.blurMarker = function() {
            this.selected || (this.marker.setIcon(d.getIcon("normal", this.info.order)), this.marker.setZIndex(1), this.$item.removeClass("ui_current"))
        }, e = d
    }(a, b, c), e = function() {
        "use strict";
        function a(a) {
            a = a || {}, this.content = a.content || [], this.childViews = []
        }
        var b, c = Eleme.Common.Evt;
        return _.extend(a.prototype, c), a.prototype.toggleChildViews = function(a) {
            this.invokeViews(function(b) {
                b.id !== a && b.unselect()
            })
        }, a.prototype.invokeViews = function(a) {
            var b = this;
            return _.each(this.childViews, function(c, d) {
                a.call(b, c, d)
            }), this
        }, a.prototype.getSelected = function() {
            return _.find(this.childViews, function(a) {
                return a.selected
            })
        }, b = a
    }(), f = function(a, b) {
        "use strict";
        function c(a) {
            a = a || {}, c._super.call(this), this.controller = a.controller, this.map = a.map, this.currentPage = null, this.searching = !1, this.content = [], this.init()
        }
        var d, e = a, f = b, g = Eleme.Common.Util, h = {resultWrapperSelector: ".result_wrap", resultConSelector: ".result_container", resultListSelector: ".search_results", paginationSelector: ".result_pagination", resultCountSelector: ".addr_amount", loaderSelector: ".search_loader", resultItemSelector: ".result_item", emptyTipSelector: ".empty_tip", numPerPage: 10, emptyTip: ['<div class="result-empty empty_tip">', '<h4 class="title">建议：</h4>', '<p class="hint">1. 请确保所有字词拼写正确。</p>', '<p class="hint">2. 尝试不同的关键字。</p>', "</div>"].join("")};
        return g.inherit(c, f), c.prototype.init = function() {
            this.$el = $(h.resultWrapperSelector), this.on("searchStateChange", $.proxy(this.searchStateHandler, this))
        }, c.prototype.searchStateHandler = function() {
            this.searching ? (this.$el.find(h.loaderSelector).removeClass("ui_hide"), this.$el.find(h.resultConSelector).addClass("ui_hide")) : (this.$el.find(h.loaderSelector).addClass("ui_hide"), this.$el.find(h.resultConSelector).removeClass("ui_hide"))
        }, c.prototype.addChildViews = function(a) {
            var b = this;
            return $.each(a.content, function(a, c) {
                var d = new e(b.map, c);
                d.parentView = b, b.childViews.push(d)
            }), this
        }, c.prototype.showPage = function(a) {
            var b = [];
            a = a || 0, this.searching = !1, this.trigger("searchStateChange"), null !== this.currentPage && (b = this.getViewByPage(this.currentPage));
            var c = this.getViewByPage(a);
            return this.currentPage = a, $.each(b, function(a, b) {
                b.hide()
            }), this._adjustMap(c), $.each(c, function(a, b) {
                b.show()
            }), $(h.resultListSelector).animate({scrollTop: "0px"}, function() {
                c.length && c[0].select()
            }), this
        }, c.prototype.pagination = function() {
            var a = this, b = this.content.length;
            return this.$el.find(h.resultCountSelector).text(b), this.addChildViews({content: this.content}), this.showPage(0), b > h.numPerPage && this.$el.find(h.paginationSelector).pagination({items: b, itemsOnPage: h.numPerPage, prevText: "&lt;", nextText: "&gt;", onPageClick: function(b, c) {
                    c.preventDefault(), a.showPage(b - 1)
                }}), this
        }, c.prototype.showEmpty = function(a) {
            a = a || {}, this.searching = !1, this.trigger("searchStateChange"), this.$el.find(h.resultListSelector).append(h.emptyTip), this.$el.find(h.resultCountSelector).text(0)
        }, c.prototype.clean = function() {
            this._clean(), this.hide(), this.$el.find(h.resultConSelector).addClass("ui_hide")
        }, c.prototype._clean = function() {
            $(h.resultListSelector).stop(), this.invokeViews(function(a) {
                a.destroy()
            }), this.childViews.length = this.content.length = 0, this.currentPage = null, this.$el.find(h.resultCountSelector).text(""), $(h.paginationSelector).pagination("destroy"), this.$el.find(h.emptyTipSelector).remove()
        }, c.prototype.hide = function() {
            this.$el.addClass("ui_hide"), $(this.map.container).removeClass("resulting")
        }, c.prototype.show = function() {
            this.$el.removeClass("ui_hide"), $(this.map.container).addClass("resulting")
        }, c.prototype.getViewByPage = function(a) {
            return this.childViews.slice(a * h.numPerPage, (a + 1) * h.numPerPage)
        }, c.prototype._adjustMap = function(a) {
            function b(a) {
                var b, c, d, e;
                return $.each(a, function(a, f) {
                    var g = f.lat, h = f.lng;
                    d = Math.min(d || g, g), e = Math.max(e || g, g), b = Math.min(b || h, h), c = Math.max(c || h, h)
                }), {ne: new qq.maps.LatLng(e, c), se: new qq.maps.LatLng(d, c), nw: new qq.maps.LatLng(e, b), sw: new qq.maps.LatLng(d, b)}
            }
            var c = [], d = this.map.getZoom(), e = this.map.getContainer().offsetWidth, f = this.map.getContainer().offsetHeight, g = {width: e - 326, height: f - 120}, h = .5971642834779395, i = 18, j = function(a, b) {
                for (var c = h, d = i; ; ) {
                    if (!(a / c > g.width || b / c > g.height))
                        return{zoom: d, resolution: c};
                    d--, c *= 2
                }
            };
            $.each(a, function(a, b) {
                c.push(new qq.maps.LatLng(b.info.lat, b.info.lng))
            });
            var k = b(c), l = k.se.distanceTo(k.sw), m = k.nw.distanceTo(k.sw), n = j(l, m), o = (175 * n.resolution, 170 * n.resolution, c[0]);
            if (o) {
                {
                    var p = o.clone(), q = o.clone(), r = b(c.concat([p, q])), s = r.se.distanceTo(r.sw), t = r.nw.distanceTo(r.sw), u = j(s, t), v = new qq.maps.LatLngBounds(r.sw, r.ne), w = v.getCenter();
                    (g.width / 2 + 326 - e / 2) / 2 * u.resolution, (g.height / 2 + 120 - f / 2) / 2 * u.resolution
                }
                d === u.zoom ? this.map.panTo(w) : (this.map.setZoom(u.zoom), this.map.setCenter(w))
            }
        }, d = c
    }(d, e), g = function(a) {
        "use strict";
        function b(a) {
            this.map = a.map;
            var b = a.offset.x, c = a.offset.y;
            this.latLng = this.map.fromPointToLatLng(new qq.maps.Point(b, c)), this.info = {id: e.uid++, lng: this.latLng.getLng(), lat: this.latLng.getLat()}, this.selected = !1, this.infoWindow = null, this.controller = a.controller, this.marker = new qq.maps.Marker({map: this.map, position: this.latLng, draggable: !0, icon: e.icons.normal}), this.init()
        }
        var c, d = a, e = {mapContainer: "#map_wrap", closeWindowSelector: ".close_btn", resultWrapperSelector: ".result_wrap", getRestaurantCountUrl: "ajax.php?act=restaurantCount", uid: 0, icons: {normal: new qq.maps.MarkerImage("images/map-sprites.png", new qq.maps.Size(28, 30), new qq.maps.Point(0, 140), new qq.maps.Point(9, 34)), dragging: new qq.maps.MarkerImage("images/map-sprites.png", new qq.maps.Size(28, 34), new qq.maps.Point(30, 140), new qq.maps.Point(2, 34))}};
        return b.prototype.init = function() {
            this.buildInfoWindow(), this.bindEvents(), this.loadData()
        }, b.prototype.buildInfoWindow = function() {
            this.infoWindow = new qq.maps.InfoWindow({map: this.map})
        }, b.prototype.bindEvents = function() {
            var a = this;
            qq.maps.event.addListener(this.marker, "click", function(b) {
                return a.select(), b.event.stopPropagation && b.event.stopPropagation(), window.event && (window.event.cancelBubble = !0), !1
            }), qq.maps.event.addListener(this.marker, "dragstart", function() {
                a.unselect(), a.marker.setIcon(e.icons.dragging)
            }), qq.maps.event.addListener(this.marker, "dragend", function() {
                a.marker.setIcon(e.icons.normal), a.loadData()
            })
        }, b.prototype.select = function() {
            this.controller.closeSelectedItem();
            var a = this.map.fromLatLngToPoint(this.marker.getPosition()), b = 275, c = $(e.resultWrapperSelector);
            c.hasClass("ui_hide") || (a.x -= c.width() / 2), a.y -= b / 2, this.map.panTo(this.map.fromPointToLatLng(a)), this.infoWindow.open()
        }, b.prototype.unselect = function() {
            this.selected = !1, this.infoWindow.close()
        }, b.prototype.loadData = function() {
            var a = this;
            this.selected = !0;
            var b = this.marker.getPosition();
            this.info.lng = b.getLng(), this.info.lat = b.getLat();
            var c = $.Deferred();
            new qq.maps.Geocoder({complete: function(b) {
                    var d = b.detail;
                    a.info.name = d.name, a.info.addr = d.address, a.info.pguid = d.pguid, c.resolve()
                }, error: function() {
                    a.info.none = !0, c.resolve()
                }}).getAddress(b);
            var d = $.get(ELEME.baseUrl + e.getRestaurantCountUrl, {posArray: [[this.info.lng, this.info.lat] + ""]}).done(function(b) {
                b = JSON.parse(b);//查找数量
                a.info.count = b.data[0]
            });
            $.when(c, d).done($.proxy(this.updateInfoWindow, this))
        }, b.prototype.updateInfoWindow = function() {
            var a = this, b = d({name: this.info.name, addr: this.info.addr, count: this.info.count, url: "ajax.php?act=getShopsLists&" + $.param({lat: this.info.lat, lng: this.info.lng})});
            $(b).on("click", ".iw-btn", function() {
                a.info.count > 0
            }).on(function(a) {
                a.stopPropagation()
            }), this.infoWindow.setPosition(this.marker), this.infoWindow.setContent(b), this.select()
        }, b.prototype.destroy = function() {
            this.unselect(), this.marker.setVisible(!1), this.marker = this.infoWindow = null
        }, c = b
    }(a), h = function() {
        "use strict";
        function a() {
            this.$el = null, this.init()
        }
        var b, c = Eleme.Common.Http, d = {entrySelector: ".history_wrap", entryListSelector: ".entry_list", entryItemSelector: ".entry_item", delAddrSelector: ".del_btn", userAddrUrl: "/userplace", emptyTip: '<li class="history-empty">无历史地址</li>'};
        return a.prototype.init = function() {
            this.$el = $(d.entrySelector), this.$el.uDropdown(), this.bindEvents()
        }, a.prototype.bindEvents = function() {
            var a = this;
            this.$el.on("click", d.delAddrSelector, function() {
                var b = $(this).parent(d.entryItemSelector), e = b.data("sn"), f = ELEME.baseUrl + d.userAddrUrl + "/" + e;
                c.request({type: "delete", url: f}).done(function(c) {
                    c.success && (b.remove(), a.$el.find(d.entryItemSelector).length || a.$el.find(d.entryListSelector).append(d.emptyTip))
                })
            })
        }, a.prototype.unfold = function() {
            this.$el.find(".e_toggle").trigger("click")
        }, b = a
    }(), i = function() {
        "use strict";
        var a, b = function(a) {
            {
                var b, c = "";
                _.escape
            }
            return c += '<li class="entry-block entry_item"><a class="candidate entry_item" href="' + (null == (b = a.url) ? "" : b) + '" target="_blank">' + (null == (b = a.name) ? "" : b) + "</a></li>"
        };
        return a = b
    }(), j = function() {
        "use strict";
        var a, b = function(a) {
            {
                var b, c = "";
                _.escape
            }
//            a = JSON.parse(a);
            return c += '<div class="entry-box"><h4 class="district-name">' + (null == (b = a.district.name) ? "" : b) + '：</h4><ul class="candidate-list entry_list">' + (null == (b = a.entries) ? "" : b) + "</ul></div>"
        };
        return a = b
    }(), k = function(a, b) {
        "use strict";
        function c() {
            this.$el = null, this.city = null, this.parentView = null, this.init()
        }
        var d, e = a, f = b, g = Eleme.Common.Http, h = {entrySelector: "#entry", entryBoxSelector: ".entries_box", getEntryUrl: "/homepage/city/"};
        return c.prototype.init = function() {
            this.$el = $(h.entrySelector)
        }, c.prototype.show = function(a) {
            // alert(a);
            var b = this;
            this.$el.removeClass("ui_hide"), this.city = a, this.fetch().then(function(a) {
               
                b.render(a)
            })
        }, c.prototype._getChildAreas = function(a, b) {
            var c = [];
            return _.each(a, function(a) {
                a[b][0] && (c = c.concat(a[b]))
            }), c
        }, c.prototype.hide = function() {
            this.$el.addClass("ui_hide")
        }, c.prototype.fetch = function() {
//            var a = ELEME.baseUrl + h.getEntryUrl + this.city + "/entries";a = JSON.parse(a);
            var a = "ajax.php?act=entries&cityId="+this.city+"";
//            console.log(g);
            return g.request({url: a, type: "get"})
        }, c.prototype.render = function(a) {
            var b = this, c = "", d = "", g = [], i = {};
            _.each(a, function(a) {
             
              
                d = "", g = b._getChildAreas(a.zones, "entries"), _.each(g, function(a) {
                    a.url = ELEME.formerBaseUrl + ELEME.baseUrl + "/place/" + a.psn, d += e(a)
                }), d.length > 0 && (i.district = a, i.entries = d, c += f(i))
            }), this.$el.find(h.entryBoxSelector).empty().append(c)
        }, c.prototype.destroy = function() {
            this.$el.find(h.entryListSelector).empty(), this.city = null
        }, d = c
    }(i, j), l = function(a, b, c, d) {
        "use strict";
        function e() {
            this.cities = [], this.city = null, this.map = this.poisearch = this.toolbar = null, this.searchResultView = this.userAddrView = this.entryView = this.dropPin = null, this.actionBeginTime = null, this.firstCome = this.firstSearch = !1, this.init()
        }
        function f(a) {
            var b = $(l.citySelector).filter('[data-id="' + a + '"]'), c = b.text(), d = b.data("map"), e = b.data("code"), f = b.data("lat"), g = b.data("lng");
            return 13 === a && (e = "0592,0596"), {cityId: a, cityName: c, cityCode: e, isMap: 1 === d, lng: g, lat: f}
        }
        var g, h = a, i = b, j = c, k = d, l = {citySelector: ".city_item", citySectionSelector: "#city_section", maskSelector: "#mask", guideSelector: "#guide", searchBtnSelector: ".search_btn", searchInputSelector: "#search_input", filterInputSelector: "#filter_input", mapSearchSelector: ".map_search", cityLabelSelector: ".city_label", guessCitySelector: ".city_maybe", historyWrapSelector: ".history_wrap", historyLabelSelector: ".history_label", rstCountUrl: "/homepage/restaurantCount", searchPoi: "ajax.php?act=searchPoi", searchDebounce: 300}, m = {ZOOM: [4, 18], ZOOM_DEFAULT: 13, RESOLUTION_MAX: .6};
        return e.prototype.init = function() {
            var a = this;
            this.initUserAddr(), this.initentryView(), this.initIntro(), $.each(ELEME.cities, function(b, c) {
                $.each(c, function(b, c) {
                    c.pinyin = c.pinyin.toLowerCase(), c.abbr = c.pinyin.match(/\b(\w)/g).join(""), c.pinyin = c.pinyin.replace(/ /g, ""), a.cities.push(c)
                })
            });
            var b = this.initCity();
            this._open(b, {init: !0}), $(function() {
                a.initMap(), a.bindMapEvent(), a.openCityMap(), a.city.isMap && $(l.searchInputSelector).focus()
            }), this.initSearch(), this.initFilter(), this.bindEvents()
        }, e.prototype.initMap = function() {
            var a = document.getElementById("map_wrap");
            a.style.height = "100%";
            this.map = new qq.maps.Map(a, {center: new qq.maps.LatLng(39.916527, 116.397128), zoom: m.ZOOM_DEFAULT, panControl: !1, mapTypeControl: !1, zoomControl: !0, zoomControlOptions: {position: qq.maps.ControlPosition.LEFT_TOP}});
            this.map.fromLatLngToPoint = function(a) {
                var b = this.getProjection(), c = b.fromLatLngToPoint(this.getBounds().getNorthEast()), d = b.fromLatLngToPoint(this.getBounds().getSouthWest()), e = 1 << this.getZoom(), f = b.fromLatLngToPoint(a);
                return new qq.maps.Point((f.x - d.x) * e, (f.y - c.y) * e)
            }, this.map.fromPointToLatLng = function(a) {
                var b = this.getProjection(), c = b.fromLatLngToPoint(this.getBounds().getNorthEast()), d = b.fromLatLngToPoint(this.getBounds().getSouthWest()), e = 1 << this.getZoom(), f = new qq.maps.Point(a.x / e + d.x, a.y / e + c.y);
                return b.fromPointToLatLng(f)
            }, this.initResultView(), this.initDropPinView()
        }, e.prototype.bindMapEvent = function() {
            qq.maps.event.addListener(this.map, "zoom_changed", $.proxy(this.closeSelectedItem, this, {boundCheck: !0})), qq.maps.event.addListener(this.map, "click", $.proxy(this.closeSelectedItem, this))
        }, e.prototype.trackUserAction = function(a, b) {
            var c = (new Date).getTime(), d = (c - this.actionBeginTime) / 1e3;
       
        }, e.prototype.bindEvents = function() {
            var a = this;
            $(".bs-dropdown-menu").on("click", function(a) {
                a.stopPropagation()
            }), $(l.citySectionSelector).on("show.bs.dropdown", function() {
                a.actionBeginTime = (new Date).getTime()
            }), $(l.citySectionSelector).on("hide.bs.dropdown", function() {
                a.actionBeginTime = null
            }), $(l.citySectionSelector).on("shown.bs.dropdown", function() {
                $(l.filterInputSelector).val("").focus()
            }), $(l.guessCitySelector).on("click", function() {
                var b = $(this).data("guess");
                a.trackUserAction("guess", $(this).text()), a.open(f(b))
            }), $(l.citySelector).on("click", function() {
                var b = $(this).data("id");
                a.trackUserAction("normal", $(this).text()), a.open(f(b))
            }), $(l.searchBtnSelector).on("click", function() {
                a.search($(l.searchInputSelector).val())
            })
        }, e.prototype.initSearch = function() {
            var a = this, b = $(l.searchInputSelector), c = new qq.maps.SearchService;
            b.typeahead({highlight: !0}, {name: "eleme-dataset", displayKey: "name", source: function(d, e) {
                    clearTimeout(b.itv), b.itv = setTimeout(function() {
                        c.setLocation(a.city.cityName), c.search(d), c.setComplete(function(a) {
                            e(a.detail.pois)
                        })
                    }, 100)
                }, templates: {suggestion: _.template('<div class="search-autocomplete"><%- data.name %></div>')}}).on("typeahead:selected", function(b, c) {
                a.search(c.name), $(this).typeahead("close")
            }).on("keyup", function(b) {
                13 === b.which && ($(this).typeahead("close"), a.search($(this).val()))
            })
        }, e.prototype.initFilter = function() {
            var a, b = this, c = $(l.filterInputSelector);
            c.typeahead({autoselect: !0}, {name: "city-dataset", displayKey: "name", source: function(a, c) {
                    for (var d = a.replace(/\'/g, "").toLowerCase(), e = [], f = 0; f < b.cities.length; f++) {
                        var g = b.cities[f];
                        if ((0 === g.pinyin.indexOf(d) || 0 === g.abbr.indexOf(d) || 0 === g.name.indexOf(d)) && e.push(g), e.length >= 6)
                            break
                    }
                    c(e)
                }, templates: {empty: '<div class="filter-empty">该城市饿了么尚未覆盖</div>', suggestion: _.template('<div class="filter-autocomplete"><%- data.name %><span class="filter-pinyin"><%- data.pinyin %></span></div>')}}).on("typeahead:selected", function(a, d) {
                b.open(f(d.id)), c.typeahead("close"), b.trackUserAction("input", d.name)
            }).on("keyup", function(b) {
                40 !== b.which && 38 !== b.which && 13 !== b.which && (clearTimeout(a), a = setTimeout(function() {
                    $(".tt-suggestion:first").addClass("tt-cursor")
                }, 300))
            })
        }, e.prototype.initResultView = function() {
            this.searchResultView = new h({controller: this, map: this.map})
        }, e.prototype.initDropPinView = function() {
            qq.maps.event.addListener(this.map, "click", function(a) {
                this.dropPin && this.dropPin.destroy(), this.dropPin = new i({controller: this, map: this.map, offset: a.pixel})
            }.bind(this))
        }, e.prototype.initUserAddr = function() {
            this.userAddrView = new j
        }, e.prototype.initentryView = function() {
            this.entryView = new k
        }, e.prototype.initIntro = function() {
            if (!localStorage.getItem("visited")) {
                this.firstCome = !0, this.firstSearch = !0;
                var a = $(l.maskSelector), b = $(l.guideSelector), c = a.add(b);
                c.removeClass("ui_hide").click(function() {
                    c.fadeOut(function() {
                        c.addClass("ui_hide").removeAttr("style")
                    })
                }), localStorage.setItem("visited", "true")
            }
        }, e.prototype.initCity = function() {
            var a, b = 0, c = $(l.cityLabelSelector), d = $(l.guessCitySelector), e = $(l.historyWrapSelector);
            return e.length && (b = e.data("city")), 0 !== b ? (a = f(b), c.text(a.cityName), $(l.historyLabelSelector).trigger("click")) : (a = f(d.data("guess")), c.text(a.cityName).trigger("click")), a
        }, e.prototype.open = function(a, b) {
            this.cleanMap(), this._open(a, b), this.openCityMap()
        }, e.prototype._open = function(a, b) {
            b = b || {};
            var c = $(l.maskSelector), d = $(l.guideSelector), e = $(l.searchInputSelector), f = $(l.cityLabelSelector), g = $(l.mapSearchSelector);
            this.city = a, f.text(this.city.cityName), b.init || f.trigger("click"), e.val(""), this.entryView.hide(), this.entryView.destroy(), this.city.isMap ? (this.firstCome || c.addClass("ui_hide"), this.firstSearch && d.removeClass("ui_hide"), g.removeClass("ui_hide"), e.focus()) : (this.entryView.show(this.city.cityId), c.removeClass("ui_hide"), g.addClass("ui_hide"), d.addClass("ui_hide"))
        }, e.prototype.openCityMap = function() {
            this.map.setCenter(new qq.maps.LatLng(this.city.lat, this.city.lng)), this.map.setZoom(m.ZOOM_DEFAULT)
        }, e.prototype.search = function() {
            var a = +new Date;
            return function(b) {
                if (b) {
                    var c = +new Date;
                    if (!(c - a < l.searchDebounce)) {
                        a = c, this.firstSearch = !1, this.firstCome = !1, $(l.maskSelector).addClass("ui_hide"), $(l.guideSelector).addClass("ui_hide");
                        var d = $(l.citySectionSelector);
                        d.hasClass("open") && d.trigger("click"), this.searchResultView.searching = !0, this.searchResultView.trigger("searchStateChange"), this._search(b)
                    }
                }
            }
        }(), e.prototype._search = function(a) {
            var b = this;
            this.searchResultView.show(), $.get(ELEME.baseUrl + l.searchPoi, {kw: a, cityId: this.city.cityId}, function(a) {
                a = JSON.parse(a);//查找位置
                b.renderSearchResult($.map(a.data, function(a, b) {
                    return{id: b, name: a.name, addr: a.address || "", lng: a.x || a.longitude, lat: a.y || a.latitude, pguid: a.pguid, count: a.count}
                }))
            })
        }, e.prototype.renderSearchResult = function(a) {
            this.searchResultView._clean(), this.searchResultView.content = a, this.searchResultView.pagination()
        }, e.prototype.cleanMap = function() {
            this.dropPin && this.dropPin.unselect(), this.searchResultView.clean()
        }, e.prototype.closeSelectedItem = function(a) {
            a = a || {};
            var b = this.searchResultView.getSelected(), c = this.dropPin, d = b || c;
            if (d) {
                if (a.boundCheck) {
                    var e = this.map.getBounds();
                    if (d.info.lat >= e.lat.minY && d.info.lat <= e.lat.maxY && d.info.lng >= e.lng.minX && d.info.lng <= e.lng.maxX)
                        return
                }
                d.unselect()
            }
        }, g = e
    }(f, g, h, k);
    !function(a) {
        "use strict";
        {
            var b = a;
            new b
        }
    }(l)
}();