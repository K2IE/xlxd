<<<<<<< HEAD
CC=g++
CFLAGS=-c -std=c++11 -pthread -DIPV6_SUPPORT
LDFLAGS=-std=c++11 -pthread
SOURCES=$(wildcard *.cpp)
OBJECTS=$(SOURCES:.cpp=.o)
EXECUTABLE=xlxd

all: $(SOURCES) $(EXECUTABLE)

$(EXECUTABLE): $(OBJECTS)
	$(CC) $(LDFLAGS) $(OBJECTS) -o $@

.cpp.o:
	$(CC) $(CFLAGS) $< -o $@

clean:
	$(RM) $(EXECUTABLE) *.o

install:
	mkdir -p /xlxd
	cp -f $(EXECUTABLE) /xlxd/
	[ -f /xlxd/xlxd.blacklist ] && \
		cp ../config/xlxd.blacklist /xlxd/xlxd.blacklist.sample || \
		cp ../config/xlxd.blacklist /xlxd/xlxd.blacklist
	[ -f /xlxd/xlxd.whitelist ] && \
		cp ../config/xlxd.whitelist /xlxd/xlxd.whitelist.sample || \
		cp ../config/xlxd.whitelist /xlxd/xlxd.whitelist
	[ -f /xlxd/xlxd.interlink ] && \
		cp ../config/xlxd.interlink /xlxd/xlxd.interlink.sample || \
		cp ../config/xlxd.interlink /xlxd/xlxd.interlink
<<<<<<< HEAD
	[ -f /xlxd/xlxd.terminal ] && \
		cp ../config/xlxd.terminal /xlxd/xlxd.terminal.sample || \
		cp ../config/xlxd.terminal /xlxd/xlxd.terminal
=======
>>>>>>> f03fc9608a57c4bed71fb4bb416f114d2a355d6c
=======
CC=g++
CFLAGS=-c -std=c++11 -pthread
LDFLAGS=-std=c++11 -pthread
SOURCES=$(wildcard *.cpp)
OBJECTS=$(SOURCES:.cpp=.o)
EXECUTABLE=xlxd
PREFIX=/usr/local
BINDIR=$(PREFIX)/bin
ETCDIR=$(PREFIX)/etc/xlxd
DATADIR=/var/lib/xlxd
#XLXUSER=$(shell id -u xlxd >/dev/null 2>&1 && echo 1 || echo 0 )

all: $(SOURCES) $(EXECUTABLE)

$(EXECUTABLE): $(OBJECTS)
	$(CC) $(LDFLAGS) $(OBJECTS) -o $@

.cpp.o:
	$(CC) $(CFLAGS) $< -o $@

clean:
	$(RM) $(EXECUTABLE) *.o

install:
	mkdir -p $(ETCDIR)
	strip -p $(EXECUTABLE)
	cp -f $(EXECUTABLE) $(BINDIR)/
	[ -f $(ETCDIR)/xlxd.blacklist ] && \
		cp ../config/xlxd.blacklist $(ETCDIR)/xlxd.blacklist.sample || \
		cp ../config/xlxd.blacklist $(ETCDIR)/xlxd.blacklist
	[ -f $(ETCDIR)/xlxd.whitelist ] && \
		cp ../config/xlxd.whitelist $(ETCDIR)/xlxd.whitelist.sample || \
		cp ../config/xlxd.whitelist $(ETCDIR)/xlxd.whitelist
	[ -f $(ETCDIR)/xlxd.interlink ] && \
		cp ../config/xlxd.interlink $(ETCDIR)/xlxd.interlink.sample || \
		cp ../config/xlxd.interlink $(ETCDIR)/xlxd.interlink
	mkdir -p $(DATADIR)
	[ ! -f $(DATADIR)/dmrid.dat ] && \
		wget -O $(DATADIR)/dmrid.dat http://xlxapi.rlx.lu/api/exportdmr.php || echo dmrid.dat exists
	[ ! -f $(DATADIR)/ysfnode.dat ] && \
		wget -O $(DATADIR)/ysfnode.dat http://xlxapi.rlx.lu/api/exportysfrepeaters.php || echo ysfnode.dat exists
#	$(shell if [ $(XLXUSER)==0 ]; then /usr/sbin/useradd -d /tmp -M -s /usr/sbin/nologin -r xlxd; fi)
	cp -f ../scripts/xlxd.service /lib/systemd/system/xlxd.service
	systemctl daemon-reload
>>>>>>> XLX020-IPv6
