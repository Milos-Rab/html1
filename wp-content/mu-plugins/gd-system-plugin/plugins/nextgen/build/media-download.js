!function(t){var e={};function n(r){if(e[r])return e[r].exports;var o=e[r]={i:r,l:!1,exports:{}};return t[r].call(o.exports,o,o.exports,n),o.l=!0,o.exports}n.m=t,n.c=e,n.d=function(t,e,r){n.o(t,e)||Object.defineProperty(t,e,{enumerable:!0,get:r})},n.r=function(t){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(t,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(t,"__esModule",{value:!0})},n.t=function(t,e){if(1&e&&(t=n(t)),8&e)return t;if(4&e&&"object"==typeof t&&t&&t.__esModule)return t;var r=Object.create(null);if(n.r(r),Object.defineProperty(r,"default",{enumerable:!0,value:t}),2&e&&"string"!=typeof t)for(var o in t)n.d(r,o,function(e){return t[e]}.bind(null,o));return r},n.n=function(t){var e=t&&t.__esModule?function(){return t.default}:function(){return t};return n.d(e,"a",e),e},n.o=function(t,e){return Object.prototype.hasOwnProperty.call(t,e)},n.p="",n(n.s=66)}([function(t,e){!function(){t.exports=this.wp.element}()},,,,function(t,e){!function(){t.exports=this.wp.data}()},function(t,e){t.exports=function(t,e,n){return e in t?Object.defineProperty(t,e,{value:n,enumerable:!0,configurable:!0,writable:!0}):t[e]=n,t}},function(t,e,n){var r=n(22),o=n(23),i=n(13),u=n(24);t.exports=function(t,e){return r(t)||o(t,e)||i(t,e)||u()}},function(t,e){!function(){t.exports=this.lodash}()},,function(t,e){!function(){t.exports=this.wp.compose}()},function(t,e){function n(e){return t.exports=n=Object.setPrototypeOf?Object.getPrototypeOf:function(t){return t.__proto__||Object.getPrototypeOf(t)},n(e)}t.exports=n},function(t,e){t.exports=function(t){if(void 0===t)throw new ReferenceError("this hasn't been initialised - super() hasn't been called");return t}},function(t,e){!function(){t.exports=this.wp.plugins}()},function(t,e,n){var r=n(14);t.exports=function(t,e){if(t){if("string"==typeof t)return r(t,e);var n=Object.prototype.toString.call(t).slice(8,-1);return"Object"===n&&t.constructor&&(n=t.constructor.name),"Map"===n||"Set"===n?Array.from(t):"Arguments"===n||/^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n)?r(t,e):void 0}}},function(t,e){t.exports=function(t,e){(null==e||e>t.length)&&(e=t.length);for(var n=0,r=new Array(e);n<e;n++)r[n]=t[n];return r}},function(t,e,n){var r=n(29),o=n(30),i=n(13),u=n(31);t.exports=function(t){return r(t)||o(t)||i(t)||u()}},,,function(t,e){t.exports=function(t,e){if(!(t instanceof e))throw new TypeError("Cannot call a class as a function")}},function(t,e){function n(t,e){for(var n=0;n<e.length;n++){var r=e[n];r.enumerable=r.enumerable||!1,r.configurable=!0,"value"in r&&(r.writable=!0),Object.defineProperty(t,r.key,r)}}t.exports=function(t,e,r){return e&&n(t.prototype,e),r&&n(t,r),t}},function(t,e,n){var r=n(34);t.exports=function(t,e){if("function"!=typeof e&&null!==e)throw new TypeError("Super expression must either be null or a function");t.prototype=Object.create(e&&e.prototype,{constructor:{value:t,writable:!0,configurable:!0}}),e&&r(t,e)}},function(t,e,n){var r=n(35),o=n(11);t.exports=function(t,e){return!e||"object"!==r(e)&&"function"!=typeof e?o(t):e}},function(t,e){t.exports=function(t){if(Array.isArray(t))return t}},function(t,e){t.exports=function(t,e){if("undefined"!=typeof Symbol&&Symbol.iterator in Object(t)){var n=[],r=!0,o=!1,i=void 0;try{for(var u,c=t[Symbol.iterator]();!(r=(u=c.next()).done)&&(n.push(u.value),!e||n.length!==e);r=!0);}catch(t){o=!0,i=t}finally{try{r||null==c.return||c.return()}finally{if(o)throw i}}return n}}},function(t,e){t.exports=function(){throw new TypeError("Invalid attempt to destructure non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.")}},,,,,function(t,e,n){var r=n(14);t.exports=function(t){if(Array.isArray(t))return r(t)}},function(t,e){t.exports=function(t){if("undefined"!=typeof Symbol&&Symbol.iterator in Object(t))return Array.from(t)}},function(t,e){t.exports=function(){throw new TypeError("Invalid attempt to spread non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.")}},,,function(t,e){function n(e,r){return t.exports=n=Object.setPrototypeOf||function(t,e){return t.__proto__=e,t},n(e,r)}t.exports=n},function(t,e){function n(e){return"function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?t.exports=n=function(t){return typeof t}:t.exports=n=function(t){return t&&"function"==typeof Symbol&&t.constructor===Symbol&&t!==Symbol.prototype?"symbol":typeof t},n(e)}t.exports=n},,,,,,,,,,,,,,,,function(t,e){t.exports=function(t,e,n){var r=e.get(t);if(!r)throw new TypeError("attempted to set private field on non-instance");if(r.set)r.set.call(t,n);else{if(!r.writable)throw new TypeError("attempted to set read only private field");r.value=n}return n}},function(t,e){t.exports=function(t,e){var n=e.get(t);if(!n)throw new TypeError("attempted to get private field on non-instance");return n.get?n.get.call(t):n.value}},function(t,e){!function(){t.exports=this.wp.blob}()},,,,,,,,,,,,,function(t,e,n){"use strict";n.r(e),n.d(e,"isExternalImage",(function(){return D})),n.d(e,"MediaDownload",(function(){return M}));var r=n(6),o=n.n(r),i=n(15),u=n.n(i),c=n(18),a=n.n(c),l=n(19),f=n.n(l),s=n(11),p=n.n(s),d=n(20),b=n.n(d),y=n(21),m=n.n(y),g=n(10),v=n.n(g),h=n(5),O=n.n(h),w=n(51),x=n.n(w),j=n(52),k=n.n(j),S=n(7),I=n(0),P=n(12),A=n(9),U=n(4),E=n(53);function B(t,e){var n=Object.keys(t);if(Object.getOwnPropertySymbols){var r=Object.getOwnPropertySymbols(t);e&&(r=r.filter((function(e){return Object.getOwnPropertyDescriptor(t,e).enumerable}))),n.push.apply(n,r)}return n}function _(t){for(var e=1;e<arguments.length;e++){var n=null!=arguments[e]?arguments[e]:{};e%2?B(Object(n),!0).forEach((function(e){O()(t,e,n[e])})):Object.getOwnPropertyDescriptors?Object.defineProperties(t,Object.getOwnPropertyDescriptors(n)):B(Object(n)).forEach((function(e){Object.defineProperty(t,e,Object.getOwnPropertyDescriptor(n,e))}))}return t}function T(t){var e=function(){if("undefined"==typeof Reflect||!Reflect.construct)return!1;if(Reflect.construct.sham)return!1;if("function"==typeof Proxy)return!0;try{return Date.prototype.toString.call(Reflect.construct(Date,[],(function(){}))),!0}catch(t){return!1}}();return function(){var n,r=v()(t);if(e){var o=v()(this).constructor;n=Reflect.construct(r,arguments,o)}else n=r.apply(this,arguments);return m()(this,n)}}var D=function(t){return t&&t.includes(nextgenNuxPatterns.nuxApiEndpoint)},C=new WeakMap,M=function(t){b()(n,t);var e=T(n);function n(){var t;a()(this,n);for(var r=arguments.length,i=new Array(r),c=0;c<r;c++)i[c]=arguments[c];return t=e.call.apply(e,[this].concat(i)),C.set(p()(t),{writable:!0,value:[]}),O()(p()(t),"detectImageBlocks",(function(e){var n=t.props.getBlockAttributes;return e.map((function(t){var e=n(t);switch(!0){case!!(null==e?void 0:e.url):return O()({},t,Object(S.pick)(e,["id","url"]));case!!(null==e?void 0:e.images):return O()({},t,Object(S.pick)(e,["ids","images"]));case!!(null==e?void 0:e.imageUrl):return O()({},t,Object(S.pick)(e,["imageUrl"]));case!!(null==e?void 0:e.mediaUrl)&&"image"===(null==e?void 0:e.mediaType):return O()({},t,Object(S.pick)(e,["mediaId","mediaUrl"]));case!!(null==e?void 0:e.backgroundImg):return O()({},t,Object(S.pick)(e,["backgroundImg"]));default:return null}}))})),O()(p()(t),"onFileChange",(function(e,n,r,o){var i=t.props,c=i.getBlockAttributes,a=i.updateBlockAttributes;switch(!0){case!!(null==o?void 0:o.imageUrl):a(r,{imageUrl:e.url});break;case!!(null==o?void 0:o.url):a(r,{id:e.id,url:e.url});break;case!!(null==o?void 0:o.mediaUrl):a(r,{mediaId:e.id,mediaUrl:e.url});break;case!!(null==o?void 0:o.backgroundImg):a(r,{backgroundImg:e.url});break;case!!(null==o?void 0:o.images):var l=c(r),f=u()(l.images);f[n]=_(_({},f[n]),{},{id:e.id,url:e.url}),!Object(E.isBlobURL)(e.url)&&"link"in f[n]&&(f[n].link=e.url),a(r,{ids:f.map((function(t){return t.id||null})),images:f})}})),O()(p()(t),"uploadExternalImages",(function(e,n){var r,i,u=t.props,c=u.createWarningNotice,a=u.mediaUpload,l=t.getUrlsFromBlockAttributes(n);(null===(i=l=null===(r=l)||void 0===r?void 0:r.filter((function(t){return void 0!==t})))||void 0===i?void 0:i.length)&&l.forEach((function(r,i){window.fetch(r).then((function(t){return t.blob()})).then((function(r){a({filesList:[r],allowedTypes:["image"],onFileChange:function(r){var u=o()(r,1)[0];return t.onFileChange(u,i,e,n)},onError:function(t){return c(t)}})})).catch((function(t){return c(t)}))}))})),t}return f()(n,[{key:"componentDidUpdate",value:function(){var t=this,e=Object(S.difference)(this.props.clientIds,k()(this,C));this.detectImageBlocks(e).filter((function(t){return!!t})).forEach((function(e){var n=o()(Object.entries(e)[0],2),r=n[0],i=n[1];t.uploadExternalImages(r,i)})),x()(this,C,this.props.clientIds)}},{key:"getUrlsFromBlockAttributes",value:function(t){switch(!0){case D(null==t?void 0:t.imageUrl):return[t.imageUrl];case D(null==t?void 0:t.url):return[t.url];case D(null==t?void 0:t.mediaUrl):return[t.mediaUrl];case D(null==t?void 0:t.backgroundImg):return[t.backgroundImg];case!!(null==t?void 0:t.images):return t.images.filter((function(t){return D(null==t?void 0:t.url)})).map((function(t){return t.url}))}}},{key:"render",value:function(){return null}}]),n}(I.Component);Object(P.registerPlugin)("nextgen-media-download",{render:Object(A.compose)([Object(U.withSelect)((function(t){var e=t("core/block-editor"),n=e.getBlockAttributes,r=e.getBlockName,o=e.getClientIdsWithDescendants;return{mediaUpload:(0,e.getSettings)().mediaUpload,clientIds:o(),getBlockAttributes:n,getBlockName:r}})),Object(U.withDispatch)((function(t){return{updateBlockAttributes:t("core/block-editor").updateBlockAttributes}}))])(M)})}]);