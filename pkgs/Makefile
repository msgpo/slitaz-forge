# Makefile for TazPkg Web.
#

PACKAGE="tazpkg-web"
LINGUAS?=de en es_AR fa fr it ja pl pt_BR ru sv uk vi zh zh_CN zh_TW

all: msgfmt

# i18n

pot:
	xgettext -o po/$(PACKAGE).pot -L Shell \
		--package-name="TazPkg Web" -k_ -k_n -k_p:1,2 \
		./search.sh ./lib/header.sh

msgmerge:
	@for l in $(LINGUAS); do \
		echo -n "Updating $$l po file."; \
		msgmerge -U po/$$l.po po/$(PACKAGE).pot; \
	done;

msgfmt:
	@for l in $(LINGUAS); do \
		echo "Compiling $$l mo file..."; \
		mkdir -p po/mo/$$l/LC_MESSAGES; \
		msgfmt -o po/mo/$$l/LC_MESSAGES/$(PACKAGE).mo po/$$l.po; \
	done;

# Install

install-msg: msgfmt
	cp -a po/mo/* /usr/share/locale

# Clean source

clean:
	rm -rf po/mo
	rm -f po/*.mo
	rm -f po/*.*~

help:
	@echo "$$ pot          - remake pot"
	@echo "$$ msgmerge     - update *.po from *.pot"
	@echo "$$ msgfmt | all - compile *.mo"
	@echo "# install-msg  - compile *.mo & install to system"
	@echo "$$ clean        - remove *.mo"
