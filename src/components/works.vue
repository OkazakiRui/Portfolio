<template>
  <div id="works" class="works p-re">
    <background title="Works"></background>
    <div class="contentWrap">
      <heading-title title="Works"></heading-title>
      <div class="worksWrap f-bet">
        <div
          v-for="(work, index) in works"
          :key="index"
          @click="
            windowCount === 0
              ? (displayWindow = index)
              : ((displayWindow = -1), (windowCount = 0))
          "
        >
          <work :workLogo="work.logo"></work>

          <transition name="fade">
            <work-window
              v-show="displayWindow === index"
              :workData="work"
              @closeWindow="closeWindow"
            ></work-window>
          </transition>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import background from '@/components/background.vue';
import headingTitle from '@/components/headingTitle.vue';
import work from '@/components/work.vue';
import workWindow from '@/components/workWindow.vue';
export default {
  data() {
    return {
      works: {
        innerPeaceCafe: {
          title: 'InnerPeaceCafe',
          concept:
            'InnerPeaceCafeは女子大生の悩みである肌トラブルを解決するために作られたカフェです。<br>一人一人に寄り添いその人にあったメニューを提供することが出来ます。',
          motivation: 'HTML, CSSを勉強し、初めて作成したwebサイトです。',
          production: '個人制作',
          position: 'Planning, Design, FrontEnd',
          usetime: 60,
          tool: 'Photoshop, Illustrator, XD, HTML5, SCSS, JavaScript',
          github: 'https://github.com/OkazakiRui/InnerPeaceCafe',
          link: 'https://click.ecc.ac.jp/ecc/rokazaki/works/InnerPeaceCafe/',
          img: './images/IPC_screen.jpg',
          logo: './svg/logo_IPC.svg',
        },
        nomino: {
          title: 'nomino',
          concept:
            'nominoは売り手の手間を最小限にした。面倒臭いがないフリマアプリです。<br>買い手がすぐ見つかり従来のフリマアプリとは違いスピーディーな取引が可能です。',
          motivation:
            'vuejsの勉強のために作成した初めてのスマートフォン向けwebアプリケーションです。',
          production: '個人制作',
          position: 'Planning, Design, FrontEnd',
          usetime: 16,
          tool: 'Photoshop, Illustrator, Figma, HTML5, SCSS, JavaScript, Vuejs',
          github: 'https://github.com/OkazakiRui/nomino',
          link: 'https://click.ecc.ac.jp/ecc/rokazaki/works/nomino/',
          img: './images/nomino_screen.jpg',
          logo: './svg/logo_nomino.svg',
        },
        tappiness: {
          title: 'たっぴねす',
          concept:
            'たっぴねすはやる気がでない人がやる気を出すためのwebアプリです。<br />目標達成ができない人に達成しないと欲しいものが手に入らないようにすることで普段頑張れない人も頑張ることが出来ます。',
          motivation:
            '初めてのチーム制作でした。チームで動くことの難しさを身をもって体験しました。',
          production: 'グループ制作',
          position: 'Planning, FrontEnd',
          usetime: '30',
          tool: 'HTML5, CSS3, Sass, javaScript, Vuejs',
          github: 'https://github.com/OkazakiRui/tappiness',
          link: 'https://click.ecc.ac.jp/ecc/rokazaki/works/tappiness/',
          img: './images/tappiness_screen.jpg',
          logo: './svg/logo_tappiness.svg',
        },
        spark: {
          title: 'Spark',
          concept:
            'Sparkはビジネスではなく、オンライン呑み会などカジュアルにビデオ通話をするための新しいツールです。<br>無言が続くと画面にエフェクトが起こったり、豊富なスタンプが特徴的です。',
          motivation:
            'Yahoo!さん主催のハッカソン、OpenHackU2020 Volume3で作成し、優秀賞を頂きました。',
          production: 'グループ制作',
          position: 'Planning, FrontEnd',
          usetime: '30',
          tool: 'Pug, SCSS, JavaScript, gulp',
          github: 'https://github.com/OkazakiRui/spark',
          link: 'https://click.ecc.ac.jp/ecc/rokazaki/works/spark/',
          img: './images/spark_screen.jpg',
          logo: './svg/logo_spark.svg',
        },
        portfolio: {
          title: 'portfolio',
          concept:
            '自分の将来したいことや、今まで作った作品をまとめたwebサイトを作成しました。',
          motivation:
            '黒とピンクが好きなので、黒とピンクを基調にしたデザインに仕上げました。<br />現在 vuejs から react + typescript へ移行中です。',
          production: '個人制作',
          position: 'Planning, Design, FrontEnd',
          usetime: '70',
          tool: 'Vuejs',
          github: 'https://github.com/OkazakiRui/portfolio_v1',
          link: 'https://click.ecc.ac.jp/ecc/rokazaki/',
          img: './images/portfolio_screen.jpg',
          logo: './svg/logo_portfolio.svg',
        },
        ECC: {
          title: 'ECC学生アプリ',
          concept:
            '現在apple storeにあるECC学生アプリは学生の間で使いにくいと評判があり、学校側も学生が通知欄を見ないので困っています。<br />そこで、ECC学生アプリを本来の機能とプラスして使いやすい機能を搭載して実装することで学生が使い続けたくなるアプリを作成したいと考えました。',
          motivation:
            'apiの作り方やスクレイピングについて学ぶことが出来ました。<br />現在アプリは開発中です。後期公開予定',
          production: 'グループ制作',
          position: 'Planning, FrontEnd',
          usetime: '20',
          tool: 'HTML5, CSS3, Sass, Docker, Laravel, Vue',
          github: 'https://github.com/OkazakiRui/spark',
          link: 'https://click.ecc.ac.jp/ecc/rokazaki/works/ECCApp-LP/',
          img: './images/ECC-LP_screen.jpg',
          logo: './svg/logo_ECC.svg',
        },
        Fribo: {
          title: 'Fribo',
          concept:
            '女性または一人暮らしの方の悩みである、夜道が怖い。を解決するために作られたwebアプリです。',
          motivation:
            'firebaseを初めて使い、PWAにも初めてしたので、初めてづくしでとても勉強になった',
          production: 'グループ制作',
          position: 'Planning, FrontEnd, BackEnd',
          usetime: '40',
          tool: 'Vuejs, Firebase',
          github: 'https://github.com/OkazakiRui/Fribo',
          link: 'https://click.ecc.ac.jp/ecc/rokazaki/works/fribo/',
          img: './images/Fribo_screen.jpg',
          logo: './svg/logo_Fribo.svg',
        },
        nonst: {
          title: 'nonst',
          concept:
            '社会人になってストレスが溜まり、中高の友達とも疎遠になっていて愚痴る相手が居ない。を解決するマッチングアプリです。',
          motivation:
            '10日間のチーム制作でどれだけのものが作れるかを知る良い機会だった。<br />ファイル構造を意識したり、トークンの自動延長などを初めてしてとても良い勉強になった。',
          production: 'グループ制作',
          position: 'Planning, FrontEnd, BackEnd',
          usetime: '30',
          tool: 'Vuejs, Firebase',
          github: 'https://github.com/OkazakiRui/nonst',
          link: 'https://click.ecc.ac.jp/ecc/rokazaki/works/nonst-app/',
          img: './images/nonst_screen.jpg',
          logo: './svg/logo_nonst.svg',
        },
      },
      displayWindow: -1,
      windowCount: 0,
    };
  },
  components: {
    background,
    headingTitle,
    work,
    workWindow,
  },
  methods: {
    closeWindow() {
      this.windowCount = 1;
    },
  },
};
</script>

<style lang="scss" scoped>
.works {
  &Wrap {
    flex-wrap: wrap;
    gap: 60px;
    padding: 50px 60px;
  }
}
.fade-enter-active,
.fade-leave-active {
  transition: opacity 0.5s;
}
.fade-enter,
.fade-leave-to {
  opacity: 0;
}
</style>
