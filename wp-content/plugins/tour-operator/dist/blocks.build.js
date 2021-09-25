!function(e){function t(n){if(l[n])return l[n].exports;var o=l[n]={i:n,l:!1,exports:{}};return e[n].call(o.exports,o,o.exports,t),o.l=!0,o.exports}var l={};t.m=e,t.c=l,t.d=function(e,l,n){t.o(e,l)||Object.defineProperty(e,l,{configurable:!1,enumerable:!0,get:n})},t.n=function(e){var l=e&&e.__esModule?function(){return e.default}:function(){return e};return t.d(l,"a",l),l},t.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},t.p="",t(t.s=1)}([function(e,t,l){var n,o;!function(){"use strict";function l(){for(var e=[],t=0;t<arguments.length;t++){var n=arguments[t];if(n){var o=typeof n;if("string"===o||"number"===o)e.push(n);else if(Array.isArray(n)&&n.length){var r=l.apply(null,n);r&&e.push(r)}else if("object"===o)for(var i in n)a.call(n,i)&&n[i]&&e.push(i)}}return e.join(" ")}var a={}.hasOwnProperty;"undefined"!==typeof e&&e.exports?(l.default=l,e.exports=l):(n=[],void 0!==(o=function(){return l}.apply(t,n))&&(e.exports=o))}()},function(e,t,l){"use strict";Object.defineProperty(t,"__esModule",{value:!0});l(2),l(5)},function(e,t,l){"use strict";var n=l(0),o=l.n(n),a=l(3),r=(l.n(a),l(4)),__=(l.n(r),wp.i18n.__),i=wp.blocks.registerBlockType,s=wp.editor.InspectorControls,u=wp.components,c=u.PanelBody,m=u.RangeControl,d=u.TextControl,p=u.SelectControl,b={columns:{type:"number",default:3},shortcodetitle:{type:"string",default:"Featured"},shortcodeSubTitle:{type:"string",default:""},seeMoreButton:{type:"string",default:""},seeMoreButtonText:{type:"string",default:"See More"},seeMoreButtonLink:{type:"string",default:"/"},postType:{type:"string",default:"tour"},displaylimit:{type:"string",default:"9"},disableText:{type:"string",default:"0"},displayorder:{type:"string",default:"ASC"},orderby:{type:"string",default:"none"},carousel:{type:"string",default:"1"},disablePlaceholder:{type:"string",default:"0"},include:{type:"string",default:""}};i("tour-operator/block-post-types",{title:__("LSX Tour Operator Post Types"),icon:"admin-site",category:"common",keywords:[__("TO Post Types"),__("tours"),__("tour-operator")],attributes:b,edit:function(e){function t(e){h({shortcodetitle:e})}function l(e){h({shortcodeSubTitle:e})}function n(e){h({seeMoreButtonText:e})}function o(e){h({seeMoreButtonLink:e})}function a(e){h({columns:e})}function r(e){h({displaylimit:e})}function i(e){h({displayorder:e})}function u(e){h({include:e})}var b=e.attributes,y=e.className,h=e.setAttributes,f=b.columns,v=b.shortcodetitle,w=b.shortcodeSubTitle,g=b.postType,x=b.displaylimit,C=b.displayorder,E=b.orderby,T=b.carousel,B=b.disablePlaceholder,S=b.seeMoreButton,M=b.seeMoreButtonText,N=b.seeMoreButtonLink,_=b.disableText,k=b.include,L=[{value:"tour",label:__("Tours")},{value:"accommodation",label:__("Accommodations")},{value:"destination",label:__("Destinations")},{value:"review",label:__("Reviews")},{value:"special",label:__("Specials")}],D=[{value:"1",label:__("Yes")},{value:"",label:__("No")}],P=[{value:"none",label:__("None")},{value:"ID",label:__("Post ID")},{value:"name",label:__("Name")},{value:"date",label:__("Date")}],A=[{value:"1",label:__("Yes")},{value:"0",label:__("No")}],O=[{value:"1",label:__("Yes")},{value:"0",label:__("No")}],I=[{value:"1",label:__("Yes")},{value:"0",label:__("No")}];return wp.element.createElement("div",{className:y},wp.element.createElement(s,{key:"inspector"},wp.element.createElement(c,{title:__("Shortcode Settings test")},wp.element.createElement(d,{label:__("Title"),type:"text",value:v,onChange:t}),wp.element.createElement(d,{label:__("Sub Title"),type:"text",value:w,onChange:l}),wp.element.createElement(p,{label:__('Add "See More Button"'),description:__('Add "See More Button" at the bottom'),options:D,value:S,onChange:function(e){return h({seeMoreButton:e})}}),S&&!!S.length&&wp.element.createElement("fragment",null,wp.element.createElement(d,{label:__("See More Button Text"),type:"text",value:M,onChange:n}),wp.element.createElement(d,{label:__("See More Button Link"),type:"text",value:N,onChange:o})),wp.element.createElement(p,{label:__("Type of Content"),description:__("Choose the parameter you wish your content to be"),options:L,value:g,onChange:function(e){return h({postType:e})}}),wp.element.createElement(m,{label:__("Columns"),value:f,onChange:a,min:1,max:6}),wp.element.createElement(d,{label:__("Display Limit"),value:x,onChange:r}),wp.element.createElement(d,{label:__("Display Order (Choose between ASC or DESC"),value:C,onChange:i}),wp.element.createElement(d,{label:__("Include only from comma seperated List of IDs"),value:k,onChange:u}),wp.element.createElement(p,{label:__("Orderby"),description:__("Choose the parameter you wish your testimonials to be ordered by"),options:P,value:E,onChange:function(e){return h({orderby:e})}}),wp.element.createElement(p,{label:__("Carousel"),description:__("Choose if the testimonials will show as carousel"),options:A,value:T,onChange:function(e){return h({carousel:e})}}),wp.element.createElement(p,{label:__("Disable Excerpt"),description:__("Choose if the text will show"),options:O,value:_,onChange:function(e){return h({disableText:e})}}),wp.element.createElement(p,{label:__("Disable Thumbnail"),description:__("Choose if the placeholder will show"),options:I,value:B,onChange:function(e){return h({disablePlaceholder:e})}}))),wp.element.createElement("h2",{className:"lsx-title"},v,wp.element.createElement("small",null,w)),wp.element.createElement("div",{className:"lsx-testimonial-body"},'[lsx_to_post_type_widget post_type="',g,'" columns="',f,'" limit="',x,'" disable_placeholder="',B,'" disable_text="',_,'" order="',C,'" orderby="',E,'" carousel="',T,'" include="',k,'" ]'))},save:function(e){var t=e.attributes,l=e.className,n=t.columns,a=t.shortcodetitle,r=t.shortcodeSubTitle,i=t.postType,s=t.displaylimit,u=t.disablePlaceholder,c=t.displayorder,m=t.seeMoreButton,d=t.seeMoreButtonText,p=t.seeMoreButtonLink,b=t.disableText,y=t.orderby,h=t.carousel,f=t.include,v=void 0;return"1"===m&&(v=wp.element.createElement("p",{className:"lsx-to-widget-view-all"},wp.element.createElement("span",null,wp.element.createElement("a",{className:o()("btn","border-btn"),href:p,rel:"noopener noreferrer"},d," ",wp.element.createElement("i",{className:"fa fa-angle-right"}))))),wp.element.createElement("div",{className:l},wp.element.createElement("h2",{className:"lsx-title"},a,wp.element.createElement("small",null,r)),wp.element.createElement("div",{className:"lsx-testimonial-body"},'[lsx_to_post_type_widget post_type="',i,'"  columns="',n,'" limit="',s,'" disable_placeholder="',u,'" disable_text="',b,'" order="',c,'" orderby="',y,'" carousel="',h,'" include="',f,'" ]'),v)}})},function(e,t){},function(e,t){},function(e,t,l){"use strict";var n=l(0),o=l.n(n),a=l(6),r=(l.n(a),l(7)),__=(l.n(r),wp.i18n.__),i=wp.blocks.registerBlockType,s=wp.editor.InspectorControls,u=wp.components,c=u.PanelBody,m=u.RangeControl,d=u.TextControl,p=u.SelectControl,b={columns:{type:"number",default:3},shortcodetitle:{type:"string",default:"Featured"},shortcodeSubTitle:{type:"string",default:""},seeMoreButton:{type:"string",default:""},seeMoreButtonText:{type:"string",default:"See More"},seeMoreButtonLink:{type:"string",default:"/"},taxonomy:{type:"string",default:"accommodation-type"},displaylimit:{type:"string",default:"9"},hideSingleLink:{type:"string",default:"no"},disableSingleLink:{type:"string",default:"no"},displayorder:{type:"string",default:"ASC"},orderBy:{type:"string",default:"none"},carousel:{type:"string",default:"1"},disableText:{type:"string",default:"0"},disablePlaceholder:{type:"string",default:"0"},include:{type:"string",default:""}};i("tour-operator/block-taxonomy",{title:__("LSX Tour Operator Taxonomies"),icon:"tag",category:"common",keywords:[__("TO Taxonomies"),__("tours"),__("tour-operator")],attributes:b,edit:function(e){function t(e){h({shortcodetitle:e})}function l(e){h({shortcodeSubTitle:e})}function n(e){h({seeMoreButtonText:e})}function o(e){h({seeMoreButtonLink:e})}function a(e){h({columns:e})}function r(e){h({displaylimit:e})}function i(e){h({displayorder:e})}function u(e){h({include:e})}var b=e.attributes,y=e.className,h=e.setAttributes,f=b.columns,v=b.shortcodetitle,w=b.shortcodeSubTitle,g=b.taxonomy,x=b.displaylimit,C=b.displayorder,E=b.orderBy,T=b.carousel,B=b.disablePlaceholder,S=b.disableText,M=b.seeMoreButton,N=b.seeMoreButtonText,_=b.seeMoreButtonLink,k=b.hideSingleLink,L=b.disableSingleLink,D=b.include,P=[{value:"travel-style",label:__("Travel Styles")},{value:"accommodation-type",label:__("Accommodation Types")},{value:"accommodation-brand",label:__("Brands")},{value:"facility",label:__("Facilities")},{value:"continent",label:__("Continent")},{value:"role",label:__("Roles")}],A=[{value:"1",label:__("Yes")},{value:"",label:__("No")}],O=[{value:"none",label:__("None")},{value:"ID",label:__("Post ID")},{value:"name",label:__("Name")},{value:"date",label:__("Date")}],I=[{value:"1",label:__("Yes")},{value:"0",label:__("No")}],Y=[{value:"yes",label:__("Yes")},{value:"no",label:__("No")}],j=[{value:"yes",label:__("Yes")},{value:"no",label:__("No")}],R=[{value:"1",label:__("Yes")},{value:"0",label:__("No")}],F=[{value:"1",label:__("Yes")},{value:"0",label:__("No")}];return wp.element.createElement("div",{className:y},wp.element.createElement(s,{key:"inspector"},wp.element.createElement(c,{title:__("Shortcode Settings")},wp.element.createElement(d,{label:__("Title"),type:"text",value:v,onChange:t}),wp.element.createElement(d,{label:__("Sub Title"),type:"text",value:w,onChange:l}),wp.element.createElement(p,{label:__('Add "See More Button"'),description:__('Add "See More Button" at the bottom'),options:A,value:M,onChange:function(e){return h({seeMoreButton:e})}}),M&&!!M.length&&wp.element.createElement("fragment",null,wp.element.createElement(d,{label:__("See More Button Text"),type:"text",value:N,onChange:n}),wp.element.createElement(d,{label:__("See More Button Link"),type:"text",value:_,onChange:o})),wp.element.createElement(p,{label:__("Type of Content"),description:__("Choose the parameter you wish your content to be"),options:P,value:g,onChange:function(e){return h({taxonomy:e})}}),wp.element.createElement(m,{label:__("Columns"),value:f,onChange:a,min:1,max:6}),wp.element.createElement(d,{label:__("Display Limit"),value:x,onChange:r}),wp.element.createElement(d,{label:__("Display Order (Choose between ASC or DESC"),value:C,onChange:i}),wp.element.createElement(d,{label:__("Include only from comma seperated List of IDs"),value:D,onChange:u}),wp.element.createElement(p,{label:__("Order By"),description:__("Choose the parameter you wish your items to be ordered by"),options:O,value:E,onChange:function(e){return h({orderBy:e})}}),wp.element.createElement(p,{label:__("Carousel"),description:__("Choose if the items will show as carousel"),options:I,value:T,onChange:function(e){return h({carousel:e})}}),wp.element.createElement(p,{label:__("Remove Taxonomy Title"),description:__("Choose if the title text will show"),options:Y,value:k,onChange:function(e){return h({hideSingleLink:e})}}),wp.element.createElement(p,{label:__("Disable View More Link"),description:__("Choose if the link will show"),options:j,value:L,onChange:function(e){return h({disableSingleLink:e})}}),wp.element.createElement(p,{label:__("Disable Excerpt"),description:__("Choose if the text will show"),options:R,value:S,onChange:function(e){return h({disableText:e})}}),wp.element.createElement(p,{label:__("Disable Thumbnail"),description:__("Choose if the placeholder will show"),options:F,value:B,onChange:function(e){return h({disablePlaceholder:e})}}))),wp.element.createElement("h2",{className:"lsx-title"},v,wp.element.createElement("small",null,w)),wp.element.createElement("div",{className:"lsx-taxonomy-body"},'[lsx_to_taxonomy_widget taxonomy="',g,'" columns="',f,'" limit="',x,'" disable_placeholder="',B,'" disable_text="',S,'" disable_single_link="0" order="',C,'" orderby="',E,'" carousel="',T,'" include="',D,'" ]'))},save:function(e){var t=e.attributes,l=e.className,n=t.columns,a=t.shortcodetitle,r=t.shortcodeSubTitle,i=t.taxonomy,s=t.displaylimit,u=t.disablePlaceholder,c=t.displayorder,m=t.seeMoreButton,d=t.seeMoreButtonText,p=t.seeMoreButtonLink,b=t.hideSingleLink,y=t.disableSingleLink,h=t.disableText,f=t.orderBy,v=t.carousel,w=t.include,g=void 0;return"1"===m&&(g=wp.element.createElement("p",{className:"lsx-to-widget-view-all"},wp.element.createElement("span",null,wp.element.createElement("a",{className:o()("btn","border-btn"),href:p,rel:"noopener noreferrer"},d," ",wp.element.createElement("i",{className:"fa fa-angle-right"}))))),wp.element.createElement("div",{className:l},wp.element.createElement("h2",{className:"lsx-title"},a,wp.element.createElement("small",null,r)),wp.element.createElement("div",{className:o()("blsx-taxonomy-bodytn","hide-title-"+b,"disable-link-"+y)},'[lsx_to_taxonomy_widget taxonomy="',i,'"  columns="',n,'" limit="',s,'" disable_placeholder="',u,'" disable_text="',h,'" disable_single_link="0" order="',c,'" orderby="',f,'" carousel="',v,'" include="',w,'" ]'),g)}})},function(e,t){},function(e,t){}]);