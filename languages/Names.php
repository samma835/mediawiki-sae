<?php
/**
  * These determine things like interwikis, language selectors, and so on.
  * Safe to change without running scripts on the respective sites.
  *
  * @ingroup Language
  */
/* private */ $wgLanguageNames = array(
	'en' => 'English',		# English
	'zh' => '中文',						# (Zhōng Wén) - Chinese
	'zh-cn' => "\xE2\x80\xAA中文(中国大陆)\xE2\x80\xAC",	# Chinese (PRC)
	'zh-hans' => "\xE2\x80\xAA中文(简体)\xE2\x80\xAC",	# Mandarin Chinese (Simplified Chinese script) (cmn-hans)
	'zh-hant' => "\xE2\x80\xAA中文(繁體)\xE2\x80\xAC"	# Mandarin Chinese (Traditional Chinese script) (cmn-hant)
);
