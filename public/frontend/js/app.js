(()=>{var e,r={80:()=>{$("#covered_splide").length>0&&new Splide("#covered_splide",{type:"loop",perPage:4,breakpoints:{640:{perPage:2},460:{perPage:1}}}).mount();if($("#gallery_splide").length>0&&new Splide("#gallery_splide",{type:"loop",drag:"free",snap:!0,perPage:3,pagination:!1,breakpoints:{640:{perPage:2},460:{perPage:1}}}).mount(),$("#hero_splide").length>0&&new Splide("#hero_splide",{type:"loop",drag:"free",snap:!0,perPage:1,pagination:!0,arrows:!1}).mount(),$("#main-slider").length>0){var e=new Splide("#main-slider",{type:"fade",heightRatio:.5,pagination:!1,arrows:!1,cover:!0}),r=new Splide("#thumbnail-slider",{rewind:!0,fixedWidth:104,fixedHeight:58,isNavigation:!0,gap:10,focus:"center",pagination:!1,cover:!0,dragMinThreshold:{mouse:4,touch:10},breakpoints:{640:{fixedWidth:66,fixedHeight:38}}});e.sync(r),e.mount(),r.mount()}},662:()=>{}},i={};function n(e){var o=i[e];if(void 0!==o)return o.exports;var a=i[e]={exports:{}};return r[e](a,a.exports,n),a.exports}n.m=r,e=[],n.O=(r,i,o,a)=>{if(!i){var p=1/0;for(s=0;s<e.length;s++){for(var[i,o,a]=e[s],t=!0,l=0;l<i.length;l++)(!1&a||p>=a)&&Object.keys(n.O).every((e=>n.O[e](i[l])))?i.splice(l--,1):(t=!1,a<p&&(p=a));if(t){e.splice(s--,1);var d=o();void 0!==d&&(r=d)}}return r}a=a||0;for(var s=e.length;s>0&&e[s-1][2]>a;s--)e[s]=e[s-1];e[s]=[i,o,a]},n.o=(e,r)=>Object.prototype.hasOwnProperty.call(e,r),(()=>{var e={935:0,111:0};n.O.j=r=>0===e[r];var r=(r,i)=>{var o,a,[p,t,l]=i,d=0;if(p.some((r=>0!==e[r]))){for(o in t)n.o(t,o)&&(n.m[o]=t[o]);if(l)var s=l(n)}for(r&&r(i);d<p.length;d++)a=p[d],n.o(e,a)&&e[a]&&e[a][0](),e[a]=0;return n.O(s)},i=self.webpackChunk=self.webpackChunk||[];i.forEach(r.bind(null,0)),i.push=r.bind(null,i.push.bind(i))})(),n.O(void 0,[111],(()=>n(80)));var o=n.O(void 0,[111],(()=>n(662)));o=n.O(o)})();