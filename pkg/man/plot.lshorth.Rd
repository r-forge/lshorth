\name{plot.lshorth}
\alias{plot.lshorth}
%- Also NEED an '\alias' for EACH other topic documented here.
\title{ plot.lshorth }
\description{Plot local shorth length}
%\usage{
%plot.lshorth(x, y, xlim = NULL, ylim = NULL,
%        probs = NULL,
%        main = "Shorth", xlab=NULL, 
%		ylab=NULL,
%		frame.plot=TRUE,
%		legendpos="topright",
%		rug=TRUE,
%		rescale="neg", ...)
%}
\usage{\method{plot}{lshorth}(x, y, xlim = NULL, ylim = NULL,
        probs = NULL,
        main = "Shorth", xlab=NULL, 
		ylab=NULL,
		frame.plot=TRUE,
		legendpos="topright",
		rug=TRUE,
		rescale="neg", ...)
}
%- maybe also 'usage' for other objects documented here.
\arguments{
  \item{x}{ an object of class lshorth, or a vector of x values.}
  \item{y}{ a matrix of shorth length, if x is not of class lshorth -- not yet implemented.}
  \item{xlim}{passed to plot.}
  \item{ylim}{passed to plot.}
  \item{probs}{ coverage probabilities, if x is not of class lshorth -- not yet implemented.}
  \item{main}{ passed as argument to  \code{title}.}
  \item{xlab}{ a label for the \code{x} axis.}
  \item{ylab}{ a label for the \code{y} axis.}
  \item{frame.plot}{a logical indicating whether a box should be drawn around the plot.}
  \item{legendpos}{position, passed to \code{legend}, or \code{NULL} for no legend.}
  \item{rug}{ logical. If TRUE, a \code{rug} is included. }
  \item{rescale}{rescaling method:one of "none","neg","std","inv".}
  \item{\dots}{ additional arguments passed to plot.}
}
\details{
  For each point in \code{x} the length of the shortest interval covering a
  fraction \code{p} of the data is marked.
  
  The internal function \code{legend.lshorth()} gives a model how to customize the legend.
}
\value{
  an object of class \code{lshorth}. See {\code{\link{lshorth}}}.
}
%\references{ ~put references to the literature/web site here ~ }
\author{G. Sawitzki \email{gs@statlab.uni-heidelberg.de}}
\note{ Scaling still under experiment}

%\seealso{\code{\link{lshorth}}}
\examples{
library(lshorth)

shorthnorm <- lshorth(rnorm(50), plot=FALSE)
plot.lshorth(shorthnorm, legend="bottom")
}
% Add one or more standard keywords, see file 'KEYWORDS' in the
% R documentation directory.
\keyword{ hplot }
\keyword{ dplot }% __ONLY ONE__ keyword per line
\keyword{ smooth }
