
<template>
    <video-js style="width: 100%" height="500" class="vjs-theme-forest vjs-big-play-centered" ref="video-player"
           controls >
        <source :src="src" type="application/x-mpegURL" >
    </video-js>
</template>

<script>
import videojs from 'video.js';
require('videojs-hotkeys');
require('videojs-contrib-hls.js');
require('videojs-contrib-quality-levels');
require('videojs-hls-quality-selector');



export default {
    props: [
        "src"
    ],
    // data() {
    //     return {
    //         player: null,
    //     };
    //
    // },
    mounted() {
        const element = this.$refs["video-player"];

         let player = videojs(element, {
            fluid: true,
            controls: true,
            plugins: {
                // playbackRates: [1.5, 2, 3, 4],
                hotkeys:{},
            }
        });

        let qualityLevels = player.qualityLevels();
        let currentSelectedQualityLevelIndex = qualityLevels.selectedIndex;

        player.hlsQualitySelector({
            displayCurrentQuality: true,
        });

    }
}

</script>

