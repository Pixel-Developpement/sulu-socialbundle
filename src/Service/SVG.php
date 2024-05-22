<?php

namespace Pixel\SocialBundle\Service;

class SVG
{
    public const SVG = [
        "facebook" => '<svg width="100%" height="100%" viewBox="0 0 320 512" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" xmlns:serif="http://www.serif.com/" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;"><path d="M279.14,288L293.36,195.34L204.45,195.34L204.45,135.21C204.45,109.86 216.87,85.15 256.69,85.15L297.11,85.15L297.11,6.26C297.11,6.26 260.43,0 225.36,0C152.14,0 104.28,44.38 104.28,124.72L104.28,195.34L22.89,195.34L22.89,288L104.28,288L104.28,512L204.45,512L204.45,288L279.14,288Z" style="fill-rule:nonzero;"/></svg>',
        "instagram" => '<svg width="100%" height="100%" viewBox="0 0 449 449" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" xmlns:serif="http://www.serif.com/" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;"><g transform="matrix(1,0,0,1,0.075,-31.825)"><path d="M224.1,141C160.5,141 109.2,192.3 109.2,255.9C109.2,319.5 160.5,370.8 224.1,370.8C287.7,370.8 339,319.5 339,255.9C339,192.3 287.7,141 224.1,141ZM224.1,330.6C183,330.6 149.4,297.1 149.4,255.9C149.4,214.7 182.9,181.2 224.1,181.2C265.3,181.2 298.8,214.7 298.8,255.9C298.8,297.1 265.2,330.6 224.1,330.6ZM370.5,136.3C370.5,151.2 358.5,163.1 343.7,163.1C328.8,163.1 316.9,151.1 316.9,136.3C316.9,121.5 328.9,109.5 343.7,109.5C358.5,109.5 370.5,121.5 370.5,136.3ZM446.6,163.5C444.9,127.6 436.7,95.8 410.4,69.6C384.2,43.4 352.4,35.2 316.5,33.4C279.5,31.3 168.6,31.3 131.6,33.4C95.8,35.1 64,43.3 37.7,69.5C11.4,95.7 3.3,127.5 1.5,163.4C-0.6,200.4 -0.6,311.3 1.5,348.3C3.2,384.2 11.4,416 37.7,442.2C64,468.4 95.7,476.6 131.6,478.4C168.6,480.5 279.5,480.5 316.5,478.4C352.4,476.7 384.2,468.5 410.4,442.2C436.6,416 444.8,384.2 446.6,348.3C448.7,311.3 448.7,200.5 446.6,163.5ZM398.8,388C391,407.6 375.9,422.7 356.2,430.6C326.7,442.3 256.7,439.6 224.1,439.6C191.5,439.6 121.4,442.2 92,430.6C72.4,422.8 57.3,407.7 49.4,388C37.7,358.5 40.4,288.5 40.4,255.9C40.4,223.3 37.8,153.2 49.4,123.8C57.2,104.2 72.3,89.1 92,81.2C121.5,69.5 191.5,72.2 224.1,72.2C256.7,72.2 326.8,69.6 356.2,81.2C375.8,89 390.9,104.1 398.8,123.8C410.5,153.3 407.8,223.3 407.8,255.9C407.8,288.5 410.5,358.6 398.8,388Z" style="fill-rule:nonzero;"/></g></svg>',
        "linkedin" => '<svg width="100%" height="100%" viewBox="0 0 448 448" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" xmlns:serif="http://www.serif.com/" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;"><g transform="matrix(1,0,0,1,0,-0.01)"><path d="M100.28,448L7.4,448L7.4,148.9L100.28,148.9L100.28,448ZM53.79,108.1C24.09,108.1 0,83.5 0,53.8C-0,24.292 24.282,0.01 53.79,0.01C83.298,0.01 107.58,24.292 107.58,53.8C107.58,83.5 83.48,108.1 53.79,108.1ZM448,448L355.22,448L355.22,302.4C355.22,267.7 354.52,223.2 306.93,223.2C258.64,223.2 251.24,260.9 251.24,299.9L251.24,448L158.46,448L158.46,148.9L247.54,148.9L247.54,189.7L248.84,189.7C261.24,166.2 291.53,141.4 336.72,141.4C430.72,141.4 448,203.3 448,283.7L448,448Z" style="fill-rule:nonzero;"/></g></svg>',
        "pinterest" => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M496 256c0 137-111 248-248 248-25.6 0-50.2-3.9-73.4-11.1 10.1-16.5 25.2-43.5 30.8-65 3-11.6 15.4-59 15.4-59 8.1 15.4 31.7 28.5 56.8 28.5 74.8 0 128.7-68.8 128.7-154.3 0-81.9-66.9-143.2-152.9-143.2-107 0-163.9 71.8-163.9 150.1 0 36.4 19.4 81.7 50.3 96.1 4.7 2.2 7.2 1.2 8.3-3.3.8-3.4 5-20.3 6.9-28.1.6-2.5.3-4.7-1.7-7.1-10.1-12.5-18.3-35.3-18.3-56.6 0-54.7 41.4-107.6 112-107.6 60.9 0 103.6 41.5 103.6 100.9 0 67.1-33.9 113.6-78 113.6-24.3 0-42.6-20.1-36.7-44.8 7-29.5 20.5-61.3 20.5-82.6 0-19-10.2-34.9-31.4-34.9-24.9 0-44.9 25.7-44.9 60.2 0 22 7.4 36.8 7.4 36.8s-24.5 103.8-29 123.2c-5 21.4-3 51.6-.9 71.2C65.4 450.9 0 361.1 0 256 0 119 111 8 248 8s248 111 248 248z"/></svg>',
        "twitter" => '<svg width="100%" height="100%" viewBox="0 0 512 416" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" xmlns:serif="http://www.serif.com/" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;"><g transform="matrix(1,0,0,1,0,-48.082)"><path d="M459.37,151.716C459.695,156.264 459.695,160.813 459.695,165.361C459.695,304.081 354.112,463.919 161.137,463.919C101.685,463.919 46.457,446.7 0,416.813C8.447,417.787 16.568,418.112 25.34,418.112C74.395,418.112 119.553,401.544 155.614,373.28C109.482,372.305 70.822,342.092 57.502,300.508C64,301.482 70.497,302.132 77.32,302.132C86.741,302.132 96.163,300.832 104.934,298.559C56.853,288.812 20.791,246.579 20.791,195.574L20.791,194.275C34.76,202.072 51.005,206.945 68.222,207.594C39.958,188.751 21.441,156.589 21.441,120.203C21.441,100.711 26.638,82.843 35.735,67.249C87.39,130.924 165.035,172.507 252.1,177.056C250.476,169.259 249.501,161.138 249.501,153.016C249.501,95.188 296.283,48.082 354.435,48.082C384.648,48.082 411.937,60.752 431.105,81.219C454.82,76.671 477.561,67.899 497.704,55.879C489.906,80.245 473.338,100.712 451.572,113.706C472.689,111.433 493.156,105.584 511.998,97.463C497.706,118.254 479.837,136.771 459.37,151.716Z" style="fill-rule:nonzero;"/></g></svg>',
        "vimeo" => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M403.2 32H44.8C20.1 32 0 52.1 0 76.8v358.4C0 459.9 20.1 480 44.8 480h358.4c24.7 0 44.8-20.1 44.8-44.8V76.8c0-24.7-20.1-44.8-44.8-44.8zM377 180.8c-1.4 31.5-23.4 74.7-66 129.4-44 57.2-81.3 85.8-111.7 85.8-18.9 0-34.8-17.4-47.9-52.3-25.5-93.3-36.4-148-57.4-148-2.4 0-10.9 5.1-25.4 15.2l-15.2-19.6c37.3-32.8 72.9-69.2 95.2-71.2 25.2-2.4 40.7 14.8 46.5 51.7 20.7 131.2 29.9 151 67.6 91.6 13.5-21.4 20.8-37.7 21.8-48.9 3.5-33.2-25.9-30.9-45.8-22.4 15.9-52.1 46.3-77.4 91.2-76 33.3.9 49 22.5 47.1 64.7z"/></svg>',
        "youtube" => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M549.655 124.083c-6.281-23.65-24.787-42.276-48.284-48.597C458.781 64 288 64 288 64S117.22 64 74.629 75.486c-23.497 6.322-42.003 24.947-48.284 48.597-11.412 42.867-11.412 132.305-11.412 132.305s0 89.438 11.412 132.305c6.281 23.65 24.787 41.5 48.284 47.821C117.22 448 288 448 288 448s170.78 0 213.371-11.486c23.497-6.321 42.003-24.171 48.284-47.821 11.412-42.867 11.412-132.305 11.412-132.305s0-89.438-11.412-132.305zm-317.51 213.508V175.185l142.739 81.205-142.739 81.201z"/></svg>',
        "tripadvisor" => '<svg width="30" height="20" viewBox="0 0 30 20" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M27.3465 6.09965L29.7594 3.47489H24.4085C21.7298 1.64535 18.4946 0.579834 14.9959 0.579834C11.5016 0.579834 8.27549 1.64765 5.60115 3.47489H0.236877L2.6498 6.09965C1.17079 7.44886 0.243604 9.39232 0.243604 11.5502C0.243604 15.6225 3.54577 18.924 7.61869 18.924C9.5535 18.924 11.3162 18.178 12.6322 16.9583L14.996 19.5317L17.3597 16.9605C18.6757 18.1802 20.4362 18.924 22.371 18.924C26.4439 18.924 29.7505 15.6225 29.7505 11.5502C29.7527 9.39008 28.8255 7.44667 27.3465 6.09965V6.09965ZM7.62087 16.5405C4.86386 16.5405 2.62973 14.3068 2.62973 11.5502C2.62973 8.79363 4.86391 6.55981 7.62087 6.55981C10.3778 6.55981 12.612 8.79363 12.612 11.5502C12.612 14.3068 10.3778 16.5405 7.62087 16.5405V16.5405ZM14.9981 11.405C14.9981 8.12124 12.6098 5.30218 9.45737 4.09813C11.162 3.3855 13.0321 2.99013 14.9959 2.99013C16.9597 2.99013 18.8319 3.3855 20.5367 4.09813C17.3865 5.30442 14.9981 8.1213 14.9981 11.405ZM22.3732 16.5405C19.6162 16.5405 17.382 14.3068 17.382 11.5502C17.382 8.79363 19.6162 6.55981 22.3732 6.55981C25.1302 6.55981 27.3644 8.79363 27.3644 11.5502C27.3644 14.3068 25.1302 16.5405 22.3732 16.5405V16.5405ZM22.3732 8.93211C20.9277 8.93211 19.757 10.1026 19.757 11.548C19.757 12.9932 20.9277 14.1638 22.3732 14.1638C23.8187 14.1638 24.9894 12.9932 24.9894 11.548C24.9894 10.1049 23.8187 8.93211 22.3732 8.93211ZM10.2371 11.5502C10.2371 12.9955 9.06636 14.166 7.62087 14.166C6.17538 14.166 5.00465 12.9955 5.00465 11.5502C5.00465 10.1049 6.17538 8.93435 7.62087 8.93435C9.06636 8.93211 10.2371 10.1049 10.2371 11.5502Z" fill="black"/></svg>',
        "github" => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512"><!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M165.9 397.4c0 2-2.3 3.6-5.2 3.6-3.3.3-5.6-1.3-5.6-3.6 0-2 2.3-3.6 5.2-3.6 3-.3 5.6 1.3 5.6 3.6zm-31.1-4.5c-.7 2 1.3 4.3 4.3 4.9 2.6 1 5.6 0 6.2-2s-1.3-4.3-4.3-5.2c-2.6-.7-5.5.3-6.2 2.3zm44.2-1.7c-2.9.7-4.9 2.6-4.6 4.9.3 2 2.9 3.3 5.9 2.6 2.9-.7 4.9-2.6 4.6-4.6-.3-1.9-3-3.2-5.9-2.9zM244.8 8C106.1 8 0 113.3 0 252c0 110.9 69.8 205.8 169.5 239.2 12.8 2.3 17.3-5.6 17.3-12.1 0-6.2-.3-40.4-.3-61.4 0 0-70 15-84.7-29.8 0 0-11.4-29.1-27.8-36.6 0 0-22.9-15.7 1.6-15.4 0 0 24.9 2 38.6 25.8 21.9 38.6 58.6 27.5 72.9 20.9 2.3-16 8.8-27.1 16-33.7-55.9-6.2-112.3-14.3-112.3-110.5 0-27.5 7.6-41.3 23.6-58.9-2.6-6.5-11.1-33.3 2.6-67.9 20.9-6.5 69 27 69 27 20-5.6 41.5-8.5 62.8-8.5s42.8 2.9 62.8 8.5c0 0 48.1-33.6 69-27 13.7 34.7 5.2 61.4 2.6 67.9 16 17.7 25.8 31.5 25.8 58.9 0 96.5-58.9 104.2-114.8 110.5 9.2 7.9 17 22.9 17 46.4 0 33.7-.3 75.4-.3 83.6 0 6.5 4.6 14.4 17.3 12.1C428.2 457.8 496 362.9 496 252 496 113.3 383.5 8 244.8 8zM97.2 352.9c-1.3 1-1 3.3.7 5.2 1.6 1.6 3.9 2.3 5.2 1 1.3-1 1-3.3-.7-5.2-1.6-1.6-3.9-2.3-5.2-1zm-10.8-8.1c-.7 1.3.3 2.9 2.3 3.9 1.6 1 3.6.7 4.3-.7.7-1.3-.3-2.9-2.3-3.9-2-.6-3.6-.3-4.3.7zm32.4 35.6c-1.6 1.3-1 4.3 1.3 6.2 2.3 2.3 5.2 2.6 6.5 1 1.3-1.3.7-4.3-1.3-6.2-2.2-2.3-5.2-2.6-6.5-1zm-11.4-14.7c-1.6 1-1.6 3.6 0 5.9 1.6 2.3 4.3 3.3 5.6 2.3 1.6-1.3 1.6-3.9 0-6.2-1.4-2.3-4-3.3-5.6-2z"/></svg>',
    ];

    public function getSVG(string $name): string
    {
        return self::SVG[$name];
    }
}